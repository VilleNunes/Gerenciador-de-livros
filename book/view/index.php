<h1 class="font-bold text-2xl text-white">Explorar</h1>
<div>
    <form class="w-full flex gap-4" action="">
        <input placeholder="Pesquisar ..." name="pesquisar" class="bg-stone-900 text-sm flex-1 p-2 text-stone-400 rounded-md focus:outline-none" type="text">
        <button class="bg-green-700 p-2 px-3 flex items-center rounded">🔍</button>
    </form>
</div>
<div>
    <section class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <?php foreach($livros as $livro):?>
            <a href="livro?id=<?=$livro["id"]?>">
                <div class="bg-stone-900 space-y-3 text-stone-400 p-3 rounded">
                    <div class="flex">
                        <img class="w-1/2" src="" alt="Imagem">
                        <div class="flex flex-col">
                            <span class="font-bold">Titulo</span>
                            <span class="text-xs italic"><?=$livro["autor"]?></span>
                            <span class="text-xs italic" >Avaliação (⭐⭐⭐⭐)</span>
                        </div>
                    </div>
                    <div>
                        Descrição do livro
                    </div>
                </div>
            </a>
        <?php endforeach;?>
    </section>
</div>