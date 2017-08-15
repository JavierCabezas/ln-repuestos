<template>
    <section class="container">
        <breadcrumbs :crumbs="crumbs"></breadcrumbs>
        <h1 class="main-ttl"><span>Hic quod maxime deserunt</span></h1>
        <div class="post-wrap stylization">
            <img class="post-img" src="http://placehold.it/1140x580" alt="">
            <p>Pariatur, corrupti, officia, molestias consectetur nesciunt ratione nihil fugiat eveniet nisi quia reiciendis dolor soluta vero autem nemo reprehenderit mollitia deserunt iste quae necessitatibus dolores a atque iure ipsa voluptatum nobis saepe temporibus error corporis minus assumenda nam ullam praesentium harum enim tempora et excepturi.</p>
            <p>Quod soluta corrupti earum officia vel inventore vitae quidem, consequuntur odit impedit, eaque dolorem odio praesentium iusto amet voluptatum distinctio iste dicta maiores doloremque porro. Ipsa doloremque illum animi laborum quo in nemo delectus veritatis, amet numquam doloribus a iure sequi nobis vero facere necessitatibus ipsam</p>

            <!-- Slider -->
            <div class="flexslider post-slider" id="post-slider-car">
                <ul class="slides">
                    <li>
                        <a data-fancybox-group="fancy-img" class="fancy-img" href="img/post/post1.jpg"><img src="http://placehold.it/1140x450" alt=""></a>
                    </li>
                    <li>
                        <a data-fancybox-group="fancy-img" class="fancy-img" href="img/post/post2.jpg"><img src="http://placehold.it/1140x450" alt=""></a>
                    </li>
                    <li>
                        <a data-fancybox-group="fancy-img" class="fancy-img" href="img/post/post3.jpg"><img src="http://placehold.it/1140x450" alt=""></a>
                    </li>
                </ul>
            </div>

            <p>Minima, earum fuga maiores unde quod quae aspernatur magnam quis adipisci ipsum maxime iusto quidem? Recusandae dolore ipsam eius alias quidem. Dignissimos, recusandae, saepe, omnis, non totam vero unde mollitia natus aliquam magni qui quibusdam incidunt ea nihil error facere ut libero blanditiis accusamus quasi facilis animi repellat consequuntur in sit rerum atque voluptatibus ipsa ullam voluptatum laborum praesentium nesciunt est iusto nulla earum ab tenetur!</p>

        </div>
    </section>
</template>

<script>
    import Breadcrumbs from '../main/Breadcrumbs.vue';

    export default {
        data () {
            return {
                crumbs: [
                    { 'title': 'Sobre Nosotros',  'path': null }
                ],
            }
        },
        components: {
            Breadcrumbs
        }
    }
</script>