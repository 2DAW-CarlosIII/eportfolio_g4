<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TareasResource;
use App\Models\CriterioEvaluacion;
use App\Models\Tarea;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return TareasResource::collection(
            Tarea::orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tarea = json_decode($request->getContent(), true);

        $tarea = Tarea::create($tarea);

        return new TareasResource($tarea);
    }
    /**
     * Display the specified resource.
     */
    public function show(CriterioEvaluacion $criterioEvaluacion, Tarea $tarea)
{
    return new TareasResource($tarea);
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CriterioEvaluacion $criterioEvaluacion, Tarea $tarea)
    {
        $tareaData = json_decode($request->getContent(), true);
        $tarea->update($tareaData);

        return new TareasResource($tarea);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CriterioEvaluacion $criterioEvaluacion, Tarea $tarea)
    {
        try {
            $tarea->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
