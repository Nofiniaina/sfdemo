<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog/post', name: 'blog.post')]
    public function index(Request $request, PostRepository $postRepo): Response
    {
        $page = $request->query->getInt('page', 1);
        $limit = 5;

        $posts = $postRepo->paginatePost($page, $limit);
        $maxPage = ceil($posts->count() / $limit);

        return $this->render('blog/index.html.twig', [
            'posts' => $posts,
            'page' => $page,
            'maxPage' => $maxPage,
        ]);
    }

    #[Route('/blog/post/create', name: 'blog.post.create')]
    public function create(): Response
    {
        return $this->render('blog/create.html.twig', []);
    }

    #[Route('/blog/post/{slug}', name: 'blog.post.view')]
    public function view(String $slug, PostRepository $postRepo): Response
    {
        $post = $postRepo->findOneBy([
            'slug' => $slug,
        ]);

        return $this->render('blog/view.html.twig', [
            'post' => $post,
        ]);
    }
}
