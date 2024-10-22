<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="">
    <header class="w-full h-[10dvh] flex items-center px-4 py-2 bg-slate-200 relative z-10">
        <h1 class="font-bold text-xl text-slate-700">LOGO</h1>
    </header>
    <div class="w-full h-[90dvh] flex">
      <aside class="w-52">
        <nav
          class="w-full h-full flex flex-col gap-y-2 p-4 shadow-[2px_2px_10px_2px_rgba(0,0,0,0.2)] 
          *:flex *:items-center *:justify-between *:gap-x-2
          *:text-slate-700 *:border-b-2 *:p-1">
          <a href="/" class="hover:bg-slate-100 hover:text-slate-900">
            Inicio
            <x-icons.home class="size-6"/>
          </a>
          <a href="informes-analisis" class="hover:bg-slate-100 hover:text-slate-900">
            Informes y analisis
            <x-icons.device-data class="size-6"/>
          </a>
          <a href="tareas-proyectos" class="hover:bg-slate-100 hover:text-slate-900">
              Gestion de tareas/proyectos
              <x-icons.list-check  class="size-10"/>
          </a>
          <a href="gestion-ventas" class="hover:bg-slate-100 hover:text-slate-900">
            Gestion de ventas
            <x-icons.report-money  class="size-6"/>
          </a>
          <a href="atencion-cliente" class="hover:bg-slate-100 hover:text-slate-900">
            Atencion al cliente
            <x-icons.headphones  class="size-6"/>
          </a>
          <a href="gestion-contactos" class="hover:bg-slate-100 hover:text-slate-900">
            Gestion de contactos
            <x-icons.user  class="size-6"/>
          </a>
      </nav>
    </aside>
    <main class="flex-1">
      @yield('content') {{-- contentido o slot de la plantilla --}}
    </main>
  </div>
</body>

</html>
