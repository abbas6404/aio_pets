<?php

namespace App\Services;

class BlogService
{
    /**
     * Get all blog posts
     */
    public function getAllPosts(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Essential Pet Care Tips for New Pet Parents aa',
                'excerpt' => 'Bringing a new pet into your home is an exciting experience, but it also comes with great responsibility.',
                'content' => 'Bringing a new pet into your home is an exciting experience, but it also comes with great responsibility. Here are some essential tips to help you provide the best care for your new furry friend.',
                'image' => '../wp-content/uploads/2017/04/blog1.jpg',
                'author' => 'Dr. Sarah Johnson',
                'date' => '2024-01-15',
                'category' => 'Pet Care',
                'tags' => ['Pet Care', 'Health', 'Tips'],
                'featured' => true
            ],
            [
                'id' => 2,
                'title' => 'The Benefits of Regular Exercise for Dogs',
                'excerpt' => 'Regular exercise is essential for your dog\'s physical and mental well-being.',
                'content' => 'Regular exercise is essential for your dog\'s physical and mental well-being. Not only does it help maintain a healthy weight, but it also provides mental stimulation and helps prevent behavioral problems.',
                'image' => '../wp-content/uploads/2017/04/blog2.jpg',
                'author' => 'Mike Thompson',
                'date' => '2024-01-10',
                'category' => 'Dog Care',
                'tags' => ['Dog Care', 'Exercise', 'Health'],
                'featured' => false
            ],
            [
                'id' => 3,
                'title' => 'Understanding Cat Behavior and Communication',
                'excerpt' => 'Cats communicate in subtle ways. Understanding their body language can help you better care for your feline friend.',
                'content' => 'Cats are fascinating creatures with complex communication systems. While they may not be as vocal as dogs, they communicate through body language, vocalizations, and behavior.',
                'image' => '../wp-content/uploads/2017/04/blog3.jpg',
                'author' => 'Dr. Emily Chen',
                'date' => '2024-01-05',
                'category' => 'Cat Care',
                'tags' => ['Cat Care', 'Behavior', 'Communication'],
                'featured' => false
            ]
        ];
    }

    /**
     * Get a single blog post by ID
     */
    public function getPostById(int $id): ?array
    {
        $posts = $this->getAllPosts();
        
        foreach ($posts as $post) {
            if ($post['id'] == $id) {
                return $post;
            }
        }
        
        return null;
    }

    /**
     * Get featured posts
     */
    public function getFeaturedPosts(): array
    {
        return array_filter($this->getAllPosts(), function ($post) {
            return $post['featured'] ?? false;
        });
    }

    /**
     * Get posts by category
     */
    public function getPostsByCategory(string $category): array
    {
        return array_filter($this->getAllPosts(), function ($post) use ($category) {
            return strtolower($post['category']) === strtolower($category);
        });
    }

    /**
     * Get all categories
     */
    public function getCategories(): array
    {
        $posts = $this->getAllPosts();
        $categories = array_unique(array_column($posts, 'category'));
        
        return array_map(function ($category) use ($posts) {
            $count = count(array_filter($posts, function ($post) use ($category) {
                return $post['category'] === $category;
            }));
            
            return [
                'name' => $category,
                'slug' => strtolower(str_replace(' ', '-', $category)),
                'count' => $count
            ];
        }, $categories);
    }

    /**
     * Get all tags
     */
    public function getAllTags(): array
    {
        $posts = $this->getAllPosts();
        $allTags = [];
        
        foreach ($posts as $post) {
            if (isset($post['tags'])) {
                $allTags = array_merge($allTags, $post['tags']);
            }
        }
        
        return array_unique($allTags);
    }
} 