<template>
    <div>
            <nav class="bg-blue-900 shadow mb-8 py-6">
                <div class="container mx-auto px-6 md:px-0">
                    <div class="flex items-center justify-center">
                        <div class="mr-6">
                            <inertia-link class="text-lg font-semibold text-gray-100 no-underline" href="#">{{$page.app.name}}</inertia-link> 
                        </div>
                        <div class="flex-1 text-right">
                                <span class="text-gray-300 text-sm pr-4">{{$page.auth.user.name}}</span>
                                <a class="text-gray-300 text-sm pr-4" href="#" @click='handleLogout'>Logout</a>
                        </div>
                    </div>
                </div>
            </nav>

            <main>
                <slot />
            </main>
    </div>
</template>

<script>
    import axios from 'axios';

  export default {
      methods:{
          async handleLogout(){
              await axios.post('/logout',{});
              window.location.href ='/';
          }
      }
  }
</script>
