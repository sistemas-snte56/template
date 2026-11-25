<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Registro de Delegados · SNTE</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
</head>
<body class="bg-white font-sans text-carbon antialiased m-0 p-0">

    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-[1.05fr_1fr]">
        
        <!-- Lado Izquierdo: Panel de Identidad (Color Guinda Institucional exacto) -->
        <section class="bg-gradient-to-br from-brand-2 from-0% to-brand-1 to-20% text-white p-8 lg:p-14 flex flex-col justify-between relative overflow-hidden min-h-[40vh] lg:min-h-screen">

            <!-- Círculo decorativo idéntico al original -->
            <div class="absolute -right-36 -bottom-36 w-[420px] h-[420px] rounded-full border-[36px] border-white/15 pointer-events-none"></div>
            
            <div class="flex flex-col gap-2 relative z-10">
                <span class="font-semibold text-sm tracking-wider opacity-90">delegados.snte.org.mx</span>
            </div>

            <div class="relative z-10 my-auto py-8">
                <h1 class="text-3xl lg:text-4xl font-extrabold text-white max-w-[520px] leading-tight mb-3">
                    Registro de presuntos Delegados
                </h1>
                <p class="text-base lg:text-lg opacity-90 max-w-[480px]">
                    VIII Congreso Nacional Extraordinario · 7, 8 y 9 de enero de 2027 · Expo Santa Fe México
                </p>
            </div>

            <div class="relative z-10"></div>
        </section>

        <!-- Lado Derecho: Panel de Acceso -->
        <section class="p-6 lg:p-12 flex flex-col justify-center items-center w-full max-w-[520px] mx-auto min-h-screen">
            <div class="w-full space-y-6">
                
                <div class="space-y-2">
                    <h2 class="text-2xl font-bold text-carbon">Entrar a mi Sección</h2>
                    <p class="text-sm text-[#6B6560] leading-relaxed">
                        Escribe el número de tu Sección y el PIN de la carta que te entregó administración.
                    </p>
                </div>

                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    
                    <div class="flex items-end gap-3">
                        <!-- Campo Sección -->
                        <div class="w-24 flex-none">
                            <label for="p-sec" class="block text-xs font-semibold mb-1 text-carbon">Sección</label>
                            <input 
                                id="p-sec" 
                                type="text" 
                                inputmode="numeric" 
                                autocomplete="off" 
                                maxlength="2" 
                                placeholder="00" 
                                class="w-full h-11 text-center text-xl font-bold tracking-widest rounded-lg border border-carbon/20 focus:border-naranja-500 focus:ring-1 focus:ring-naranja-500 outline-none transition"
                            />
                        </div>

                        <!-- Campo PIN -->
                        <div class="flex-1 min-w-0">
                            <label for="p-pin" class="block text-xs font-semibold mb-1 text-carbon">PIN</label>
                            <input 
                                id="p-pin" 
                                type="text" 
                                autocomplete="off" 
                                autocapitalize="characters" 
                                spellcheck="false" 
                                placeholder="XXXX-XXXX-XXXX" 
                                class="w-full h-11 px-3 text-base font-semibold tracking-wider uppercase rounded-lg border border-carbon/20 focus:border-naranja-500 focus:ring-1 focus:ring-naranja-500 outline-none transition"
                            />
                        </div>
                    </div>

                    <!-- Botón Principal -->
                    <button type="submit" class="w-full h-11 bg-naranja-500 hover:bg-naranja-600 text-white font-semibold rounded-lg transition shadow-sm mt-2">
                        Entrar
                    </button>
                </form>

                <!-- Enlace de administración -->
                <div class="pt-2 text-center">
                    <a href="/admin" class="text-xs font-medium text-[#6B6560] hover:text-carbon underline transition opacity-80 hover:opacity-100">
                        Eres administrador
                    </a>
                </div>

            </div>
        </section>

    </div>

    @fluxScripts
</body>
</html>