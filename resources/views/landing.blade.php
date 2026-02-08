<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Open Football Dashboard') }}</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
        
        <!-- TailwindCSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            'football-blue': {
                                50: '#eff6ff',
                                100: '#dbeafe',
                                500: '#3b82f6',
                                600: '#2563eb',
                                700: '#1d4ed8',
                                800: '#1e40af',
                                900: '#1e3a8a',
                            }
                        }
                    }
                }
            }
        </script>
    </head>
    <body class="h-full bg-gradient-to-br from-blue-50 via-white to-indigo-50">
        <div class="min-h-full flex flex-col">
            <!-- Navigation -->
            <nav class="bg-white/80 backdrop-blur-sm border-b border-gray-200 sticky top-0 z-40">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 flex items-center">
                                <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <span class="ml-3 text-xl font-bold text-gray-900">Open Football Dashboard</span>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <a href="/dashboard/login" 
                               class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">
                                Entrar
                            </a>
                            <a href="/dashboard/register" 
                               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:shadow-lg">
                                Cadastrar
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Hero Section -->
            <main class="flex-1">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        
                        <!-- Content -->
                        <div class="space-y-8">
                            <div class="space-y-4">
                                <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 leading-tight">
                                    Dashboard de 
                                    <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                                        Futebol
                                    </span>
                                    Completo
                                </h1>
                                <p class="text-xl text-gray-600 leading-relaxed">
                                    Gerencie times, partidas, classificações e artilheiros do Campeonato Brasileiro. 
                                    Dashboard completo com widgets, relatórios e sincronização automática de dados.
                                </p>
                            </div>

                            <!-- Features -->
                            <div class="space-y-4">
                                <h3 class="text-lg font-semibold text-gray-900">Principais recursos:</h3>
                                <div class="space-y-6">
                                    <!-- Persistência Local -->
                                    <div>
                                        <h4 class="text-base font-semibold text-gray-900 mb-3">Persistência Local</h4>
                                        <div class="grid sm:grid-cols-2 gap-2 text-sm">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div>
                                                <span class="text-gray-700">Times</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div>
                                                <span class="text-gray-700">Partidas</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div>
                                                <span class="text-gray-700">Classificação</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div>
                                                <span class="text-gray-700">Artilheiros</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Dashboard Widgets -->
                                    <div>
                                        <h4 class="text-base font-semibold text-gray-900 mb-3">Dashboard com Widgets</h4>
                                        <div class="space-y-2 text-sm">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-1.5 h-1.5 bg-green-500 rounded-full"></div>
                                                <span class="text-gray-700">Classificação atual do Campeonato Brasileiro</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <div class="w-1.5 h-1.5 bg-green-500 rounded-full"></div>
                                                <span class="text-gray-700">Próximas partidas e últimos resultados</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <div class="w-1.5 h-1.5 bg-green-500 rounded-full"></div>
                                                <span class="text-gray-700">Top artilheiros e status de sincronização</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Relatórios -->
                                    <div>
                                        <h4 class="text-base font-semibold text-gray-900 mb-3">Relatórios Inteligentes</h4>
                                        <div class="space-y-2 text-sm">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-1.5 h-1.5 bg-purple-500 rounded-full"></div>
                                                <span class="text-gray-700">Gráficos de pontos por time e gols por jogador</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <div class="w-1.5 h-1.5 bg-purple-500 rounded-full"></div>
                                                <span class="text-gray-700">Tabela de classificação e histórico de partidas</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CTA Buttons -->
                            <div class="flex flex-col sm:flex-row gap-4 pt-6">
                                <a href="/dashboard/register" 
                                   class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-8 py-4 rounded-xl text-lg font-semibold transition-all duration-200 hover:shadow-xl hover:scale-[1.02] text-center">
                                    Começar Agora
                                </a>
                                <a href="/dashboard/login" 
                                   class="bg-white hover:bg-gray-50 text-gray-900 border border-gray-300 hover:border-gray-400 px-8 py-4 rounded-xl text-lg font-semibold transition-all duration-200 hover:shadow-lg text-center">
                                    Fazer Login
                                </a>
                            </div>
                        </div>

                        <!-- Visual Element -->
                        <div class="relative">
                            <div class="relative bg-white rounded-2xl shadow-2xl p-8 border border-gray-200">
                                <div class="space-y-6">
                                    <!-- Mock Dashboard Header -->
                                    <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                                        <h3 class="text-lg font-semibold text-gray-900">Dashboard</h3>
                                        <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                    </div>
                                    
                                    <!-- Mock Stats Cards -->
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="bg-blue-50 p-4 rounded-lg">
                                            <div class="text-2xl font-bold text-blue-600">127</div>
                                            <div class="text-sm text-gray-600">Partidas</div>
                                        </div>
                                        <div class="bg-indigo-50 p-4 rounded-lg">
                                            <div class="text-2xl font-bold text-indigo-600">24</div>
                                            <div class="text-sm text-gray-600">Times</div>
                                        </div>
                                    </div>
                                    
                                    <!-- Mock Chart Area -->
                                    <div class="bg-gray-50 rounded-lg p-6 h-32 flex items-end justify-center space-x-2">
                                        <div class="w-4 bg-blue-400 rounded-t" style="height: 60%"></div>
                                        <div class="w-4 bg-blue-500 rounded-t" style="height: 80%"></div>
                                        <div class="w-4 bg-blue-600 rounded-t" style="height: 45%"></div>
                                        <div class="w-4 bg-blue-400 rounded-t" style="height: 90%"></div>
                                        <div class="w-4 bg-blue-500 rounded-t" style="height: 70%"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Decorative Elements -->
                            <div class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-to-r from-blue-400 to-indigo-400 rounded-full opacity-20 animate-pulse"></div>
                            <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-gradient-to-r from-indigo-400 to-purple-400 rounded-full opacity-10"></div>
                        </div>
                    </div>
                </div>                
            </main>

            <!-- Footer -->
            <footer class="bg-gray-50 border-t border-gray-200">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <div class="text-center text-sm text-gray-600">
                        <p>&copy; {{ date('Y') }} Open Football Dashboard. Licença MIT. Open Source e gratuito para sempre.</p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>