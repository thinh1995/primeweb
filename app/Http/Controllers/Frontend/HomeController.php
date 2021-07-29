<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UITemplateRepository;
use App\Repositories\Eloquents\EloquentUITemplateRepository;

class HomeController extends Controller
{
    /** @var EloquentUITemplateRepository */
    private $UITemplateRepository;

    public function __construct(UITemplateRepository $UITemplateRepository)
    {
        $this->UITemplateRepository = $UITemplateRepository;
    }

    public function index()
    {
        return view('frontend.home');
    }

    public function themeIndex()
    {
        $templates = $this->UITemplateRepository->findBy([], null, true);

        return view('frontend.themes')
            ->with([
                'templates' => $templates
            ]);
    }

    public function demo($template)
    {
        $demoSrc = $template . '.' . env('APP_DOMAIN');

        return view('frontend.demo')
            ->with([
                'demoSrc' => $demoSrc
            ]);
    }
}
