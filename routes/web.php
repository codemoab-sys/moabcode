<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/clientescotizaron', function (Request $request) {
    $attributes = $request->validate([
        'nombre' => 'required|string|max:255',
        'empresa' => 'required|string|max:255',
        'telefono' => 'required|string|max:50',
        'correo' => 'nullable|email|max:255',
        'mensaje' => 'required|string|max:2000',
    ]);

    Storage::makeDirectory('clientescotizaron');

    $fileName = sprintf(
        '%s_%s.txt',
        now()->format('Ymd_His'),
        Str::slug(substr($attributes['nombre'], 0, 40) ?: 'cliente')
    );

    $content = "Nombre completo: {$attributes['nombre']}\n" .
               "Empresa: {$attributes['empresa']}\n" .
               "Teléfono: {$attributes['telefono']}\n" .
               "Correo electrónico: " . ($attributes['correo'] ?? 'No especificado') . "\n\n" .
               "Mensaje:\n{$attributes['mensaje']}\n" .
               "\n---\nEnviado: " . now()->toDateTimeString() . "\n";

    Storage::put('clientescotizaron/' . $fileName, $content);

    if ($request->expectsJson()) {
        return response()->json(['message' => 'Gracias. Tu solicitud ha sido enviada correctamente.']);
    }

    return back()->with('status', 'Gracias. Tu solicitud ha sido enviada correctamente.');
})->name('clientescotizaron.store');

// Informational pages
Route::view('/terminos', 'pages.terms')->name('terms');
Route::view('/privacidad', 'pages.privacy')->name('privacy');
Route::view('/contactanos', 'pages.contact')->name('contact');
Route::view('/nosotros', 'pages.nosotros')->name('nosotros');
