<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Redirect implements FilterInterface
{
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->has('first_login')) {
            return redirect()->to('/keranjang');
        } else {
            session()->set('first_login', true);
            return redirect()->to('/home');
        }
    }

    public function before(RequestInterface $request, $arguments = null)
    {
        // Kosongkan jika hanya ingin mengatur redirect setelah login
    }
}
