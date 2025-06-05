<h1 class="font-bold text-2xl text-white">Explorar</h1>
<div>
    <form class="w-full flex gap-4" action="">
        <input placeholder="Pesquisar ..." name="pesquisar" class="bg-stone-900 text-sm flex-1 p-2 text-stone-400 rounded-md focus:outline-none" type="text">
        <button class="bg-green-700 p-2 px-5 flex items-center rounded"><img class="w-[23px]" src="icons/lupa.svg" alt=""></button>
    </form>
</div>
<div>
    <section class="flex flex-wrap  gap-5  justify-center">
        <?php foreach($livros as $livro):?>
            <a href="livro?id=<?=$livro->id?>">
                <div class="bg-stone-900 space-y-3   max-w-[314px]  text-stone-400 p-3 rounded h-[200px]  line-clamp-3">
                    <div class="flex gap-4">
                        <img class="w-1/2 h-[100px] rounded object-contain" src="https://static.vecteezy.com/system/resources/previews/017/744/893/non_2x/open-book-illustration-png.png" alt="Imagem">
                        <div class="flex flex-col justify-between">
                            <div class="flex flex-col">
                                <span class="text-md font-bold"><?=$livro->title?></span>
                                <span class="text-xs italic"><?=$livro->autor?></span>
                            </div>
                            <span class="text-xs italic" >Avaliação (⭐⭐⭐⭐)</span>
                        </div>
                    </div>
                    <div>
                       <?=$livro->descricao?>
                    </div>
                </div>
            </a>
        <?php endforeach;?>
    </section>
    <div class="mt-5 flex justify-between items-center">
        <span class="text-stone-500 font-xl">
            Total de livros 20
        </span>
        <div class="flex items-center gap-3">
            <button class="bg-stone-800 px-2 rounded cursor-pointer"><img class="w-[20px]" src="icons/left.svg" alt=""></button>
            <span class="text-stone-500 text-md font-bold">5</span>
            <button class="bg-stone-800 px-2 rounded cursor-pointer"><img class="w-[20px]" src="icons/right.svg" alt=""></button>
        </div>
    </div>
</div>