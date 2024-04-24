<?php 
    include_once("templates/header.php");

    if(isset($_GET['id'])){

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title']?></h1>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title']?>">
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi exercitationem quia velit a soluta odio explicabo recusandae facilis maxime quasi nihil id distinctio, facere blanditiis accusantium. Enim cumque molestias eveniet?
        Nemo sit quasi, possimus repellat, ipsa et iure nam maiores vitae laudantium cum voluptas distinctio quas autem quia optio quod dignissimos ab suscipit deleniti debitis ullam. Doloribus modi eos sint!
        Exercitationem ab soluta amet deserunt, alias fugit culpa qui delectus itaque debitis impedit magni ratione quaerat illo suscipit recusandae mollitia perspiciatis et necessitatibus provident aperiam? Quasi, vitae. Qui, quam ipsum?
        Assumenda accusamus, rerum neque debitis a ipsum excepturi sunt expedita fugit natus ipsa earum voluptatibus aspernatur eos blanditiis. Culpa voluptatem aliquam atque. Expedita officia, cum possimus in iste itaque temporibus!
        Harum, ab. Atque recusandae ab repellendus perferendis, mollitia officiis deleniti reprehenderit assumenda pariatur cumque quae? Omnis animi ratione voluptatibus, incidunt at aut dolore quam temporibus exercitationem repellendus molestiae? Ipsum, beatae?
        </p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi exercitationem quia velit a soluta odio explicabo recusandae facilis maxime quasi nihil id distinctio, facere blanditiis accusantium. Enim cumque molestias eveniet?
        Nemo sit quasi, possimus repellat, ipsa et iure nam maiores vitae laudantium cum voluptas distinctio quas autem quia optio quod dignissimos ab suscipit deleniti debitis ullam. Doloribus modi eos sint!
        Exercitationem ab soluta amet deserunt, alias fugit culpa qui delectus itaque debitis impedit magni ratione quaerat illo suscipit recusandae mollitia perspiciatis et necessitatibus provident aperiam? Quasi, vitae. Qui, quam ipsum?
        Assumenda accusamus, rerum neque debitis a ipsum excepturi sunt expedita fugit natus ipsa earum voluptatibus aspernatur eos blanditiis. Culpa voluptatem aliquam atque. Expedita officia, cum possimus in iste itaque temporibus!
        Harum, ab. Atque recusandae ab repellendus perferendis, mollitia officiis deleniti reprehenderit assumenda pariatur cumque quae? Omnis animi ratione voluptatibus, incidunt at aut dolore quam temporibus exercitationem repellendus molestiae? Ipsum, beatae?
        </p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi exercitationem quia velit a soluta odio explicabo recusandae facilis maxime quasi nihil id distinctio, facere blanditiis accusantium. Enim cumque molestias eveniet?
        Nemo sit quasi, possimus repellat, ipsa et iure nam maiores vitae laudantium cum voluptas distinctio quas autem quia optio quod dignissimos ab suscipit deleniti debitis ullam. Doloribus modi eos sint!
        Exercitationem ab soluta amet deserunt, alias fugit culpa qui delectus itaque debitis impedit magni ratione quaerat illo suscipit recusandae mollitia perspiciatis et necessitatibus provident aperiam? Quasi, vitae. Qui, quam ipsum?
        Assumenda accusamus, rerum neque debitis a ipsum excepturi sunt expedita fugit natus ipsa earum voluptatibus aspernatur eos blanditiis. Culpa voluptatem aliquam atque. Expedita officia, cum possimus in iste itaque temporibus!
        Harum, ab. Atque recusandae ab repellendus perferendis, mollitia officiis deleniti reprehenderit assumenda pariatur cumque quae? Omnis animi ratione voluptatibus, incidunt at aut dolore quam temporibus exercitationem repellendus molestiae? Ipsum, beatae?
        </p>
        </div>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#" ><?= $tag?></a></li>
            <?php endforeach;?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#" ><?= $category?></a></li>
            <?php endforeach;?>
        </ul>
    </aside>
</main>
      
<?php 
    include_once("templates/footer.php");
?>