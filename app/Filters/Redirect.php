<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Redirect implements FilterInterface
{
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
        if (session()->get('isLoggedIn')) {
                return redirect()->to(site_url('keranjang'));
        }
    }
    
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
    }
}
