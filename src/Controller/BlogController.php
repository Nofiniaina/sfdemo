<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog/post', name: 'blog.post')]
    public function index(PostRepository $postRepo): Response
    {

        $posts = $postRepo->findAll();

        return $this->render('blog/index.html.twig', [
            'posts' => $posts,
        ]);
    }

    #[Route('/blog/post/create', name:'blog.post.create')]
    public function create() {
        return $this->render('blog/create.html.twig', [
            
        ]);
    }

    #[Route('/blog/post/{slug}', name: 'blog.post.view')]
    public function view(String $slug, PostRepository $postRepo) {
        $post = $postRepo->findOneBy(['slug' => $slug]);

        return $this->render('blog/view.html.twig', [
            'post' => $post
        ]);
    }
}
