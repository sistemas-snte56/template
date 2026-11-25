<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pdf-prueba', function () {

    $html = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <style>
                body {
                    font-family: sans-serif;
                    padding: 30px;
                }

                h1 {
                    color: #2563eb;
                    text-align: center;
                }

                p {
                    font-size: 14px;
                }
            </style>
        </head>
        <body>
            <h1>Mi primer PDF</h1>
            <p>Generado directamente desde una ruta Laravel.</p>
            <p>Fecha: ' . date('d/m/Y') . '</p>
            <p>Hora: ' . date('H:i:s') . '</p>
        </body>
        </html>
    ';

    $pdf = Pdf::loadHTML($html);

    return $pdf->stream('mi-documento.pdf');

});