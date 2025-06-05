<div class="flex flex-col items-center justify-center space-y-5">
    
    <div class="w-full flex flex-col gap-5">
        <h1 class="font-bold text-2xl  text-white">Explorar</h1>
        <form class="w-full flex gap-4" >
            <input placeholder="Pesquisar ..." name="pesquisar" class="bg-stone-900 text-sm flex-1 p-2 text-stone-400 rounded-md focus:outline-none" type="text">
            <button   class="bg-green-700 p-2 px-5 flex items-center rounded">
                <img class="w-[23px]" src="icons/lupa.svg" alt="">
            </button>
        </form>
    </div>
    <div>
        <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
            <?php foreach($livros as $livro):?>
                <a href="livro?id=<?=$livro->id?>">
                    <div class="bg-stone-900 space-y-3 border-1 border-stone-800  max-w-[314px]  text-stone-400 p-3 rounded h-[200px]  line-clamp-3">
                        <div class="flex gap-4">
                            <img class="w-1/2 h-[100px] rounded object-contain" src="data:image/jpeg;base64,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" alt="Imagem">
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
</div>