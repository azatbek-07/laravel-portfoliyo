<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $statusFilter = $request->query('status');

        $query = Project::latest();

        if ($statusFilter === 'completed') {
            $query->where('status', 'Yakunlangan');
        } elseif ($statusFilter === 'in_progress') {
            $query->where('status', 'Ishlab chiqilmoqda');
        }

        $projects = $query->paginate(4)->withQueryString();

        return view('projects.index', compact('projects', 'statusFilter'));
    }
}
