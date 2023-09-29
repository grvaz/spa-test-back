<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;


class LogController extends Controller
{
    /**
     * @return Builder[]|Collection
     */
    public function index()
    {
        return Log::query()->orderBy('id', 'desc')->get();
    }
}
