<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            "slack_name" => $request->query('slack_name'),
            "current_day" => Carbon::today()->englishDayOfWeek,
            "utc_time" => Carbon::now('UTC'),
            "track" =>  $request->query('track'),
            "github_file_url" => "https://github.com/codejutsu1/Hng-task-one/blob/main/app/Http/Controllers/TaskController.php",
            "github_repo_url" => "https://github.com/codejutsu1/Hng-task-one",
            "status_code" => 200
        ], 200);
    }
}
