<?php

namespace App\Providers;

use App\Petition;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class DashboardProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        view()->share(['reports' =>
            [
                'petitionCount' => Petition::all()->count(),
                'petitionInAnalisys' => Petition::all()->where('status_id', '=','1')->count(),
                'new_projects' => Petition::all()->where('created_at', '>=', Carbon::today())->count()
            ]
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
