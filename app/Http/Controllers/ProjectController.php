<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $statusFilter = $request->query('status');

        $counts = [
            'all' => Project::count(),
            'completed' => Project::where('status', 'Yakunlangan')->count(),
            'in_progress' => Project::where('status', 'Ishlab chiqilmoqda')->count(),
        ];

        $query = Project::orderBy('id', 'asc');

        if ($statusFilter === 'completed') {
            $query->where('status', 'Yakunlangan');
        } elseif ($statusFilter === 'in_progress') {
            $query->where('status', 'Ishlab chiqilmoqda');
        }

        $projects = $query->paginate(6)->withQueryString();

        return view('projects.index', compact('projects', 'statusFilter', 'counts'));
    }
}
