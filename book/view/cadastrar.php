<div class="w-[380px] shadow-2xl p-6">
    <span class="text-2xl font-bold">Cadastrar</span>
    <form class="flex flex-col mt-10 gap-1 " action="">
        <label class="text-sm"  for="name">Nome</label>
        <input class="border-1 rounded px-3 py-1 text-sm" required placeholder="Nome" id="name" name="name" type="text">
        <label class="text-sm"  for="email">Email</label>
        <input class="border-1 rounded px-3 py-1 text-sm" required placeholder="exemple@email.com" id="email" name="email" type="email">
        <label class="text-sm" for="password">Senha</label>
        <input class="border-1 rounded px-3 py-1 text-sm" required placeholder="Senha" id="password" name="password" type="password">
        <label class="text-sm" for="confirmar_pass">Confirmar Senha</label>
        <input class="border-1 rounded px-3 py-1 text-sm" required placeholder="Confirmar Senha" id="confirmar_pass" name="confirmar_pass" type="password">
        <a href="index" class="bg-stone-900 w-[120px] flex justify-center mt-5 cursor-pointer hover:bg-stone-950 text-white py-1 font-bold rounded">
            Cadastrar
        </a href="index">
    </form>
    <p class="mt-2"><a href="login" class="text-[12px] font-bold">Já possui uma conta?</a></p>
</div>