<?php

namespace App\Exports;

use App\Models\Client;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SearchClientsExport implements FromView
{
    private $clients;

    public function __construct($clients)
    {
        $this->clients = $clients;
    }
    /**
     * @return View
     */
    public function view(): View
    {
        return view('admin.clients.excel', [
            'clients' => $this->clients
        ]);
    }
}
