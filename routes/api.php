<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CustomConnectorController;

Route::get('/test-url', [CustomConnectorController::class, 'testUrl']);
Route::put('connectors/publish/{id}', [CustomConnectorController::class, 'publishConnector']);
Route::post('connectors', [CustomConnectorController::class, 'createConnector']);
Route::put('connectors/{id}', [CustomConnectorController::class, 'updateConnector']);
Route::delete('connectors/{id}', [CustomConnectorController::class, 'deleteConnector']);
Route::get('connectors/drafts', [CustomConnectorController::class, 'listDrafts']);
Route::get('connectors/published', [CustomConnectorController::class, 'listPublished']);


// {
//     "base_url": "https://pokeapi.co/api/v2/pokemon",
//     "stream_url": "/pikachu",
//     "auth_type": "No_Auth",
//     "auth_credentials": {
//     },
//     "status": "published"
// }

// {
//     "base_url": "https://api.openweathermap.org/data/2.5",
//     "stream_url": "/weather/?q=london,uk",
//     "auth_type": "API_Key",
//     "auth_credentials": {
//       "inject_into": "Query Parameter",
//       "parameter_name": "appid",
//       "api_key": "zkwnfknnn"
//     }
// }
