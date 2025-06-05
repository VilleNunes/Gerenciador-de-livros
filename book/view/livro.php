<div class="grid grid-cols-5 gap-3"> 
    <div class="bg-stone-900 space-y-3 col-span-3  text-stone-400 p-3 rounded">
        <div class="flex gap-4">
            <img class="w-2/4  h-[100px] rounded object-contain"
                src="https://static.vecteezy.com/system/resources/previews/017/744/893/non_2x/open-book-illustration-png.png"
                alt="Imagem">
            <div class="flex flex-col justify-between">
                <span class="text-2xl font-bold"><?=$livro->title?></span>
                <span class="text-1xl font-bold"><?=$livro->autor?></span>
                <span class="text-xs italic">Avaliação (⭐⭐⭐⭐)</span>
            </div>
        </div>
        <div class="mt-10 text-md">
            <?=$livro->descricao?>
        </div>
    </div>

    <form class="col-span-2 p-5 bg-stone-900 flex flex-col" action="">
        <h1 class="text-xl font-bold text-center text-stone-400">Deixe seu comentario</h1>
        <label for="">Avaliação</label>
        <select name="" id="">
            <option value=""  title="2">Nota</option>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">4</option>
            <option value="">5</option>
        </select>
    </form>
</div>

<h1>Livros Relacionados</h1>