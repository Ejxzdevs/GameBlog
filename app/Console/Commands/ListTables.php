<?php 

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ListTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'list:tables';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all tables in the database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $database = env('DB_DATABASE');
        $tables = [];

        switch (config('database.default')) {
            case 'mysql':
                $tables = DB::select('SHOW TABLES');
                $key = 'Tables_in_' . $database;
                foreach ($tables as $table) {
                    $this->info($table->$key);
                }
                break;

            case 'pgsql':
                $tables = DB::select("SELECT table_name FROM information_schema.tables WHERE table_schema = 'public'");
                foreach ($tables as $table) {
                    $this->info($table->table_name);
                }
                break;

            case 'sqlite':
                $tables = DB::select("SELECT name FROM sqlite_master WHERE type='table'");
                foreach ($tables as $table) {
                    $this->info($table->name);
                }
                break;

            default:
                $this->error('Unsupported database driver');
                return 1;
        }

        return 0;
    }
}
