<?php

namespace Runline\ProfileTool;

use Illuminate\Http\Request;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool as BaseTool;

class ProfileTool extends BaseTool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-profile-tool', __DIR__.'/../dist/js/tool.js');
        Nova::style('nova-profile-tool', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Build the menu that renders the navigation links for the tool.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function menu(Request $request) {
        return view('nova-profile-tool::navigation');
    }
}
