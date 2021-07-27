<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\MenuRepository;
use App\Repositories\Eloquents\EloquentMenuRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /** @var EloquentMenuRepository */
    private $menuRepository;

    public function __construct(MenuRepository $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($domain)
    {
        $menus = $this->menuRepository->findBy([], null, false);

        $template = "templates.{$domain}.home";

        return view($template)
            ->with([
                'menus' => $menus
            ]);
    }
}
