<template lang="pug">
b-container.footer(fluid='')
    b-container
        b-row
            b-col(v-for="item in menu")
                b-link.link-footer {{ item.title }}
                //- b-link.sublink-footer(v-for="subitem in item.items") {{ subitem.title }}
</template>

<script>
export default ({
    name: 'footer',
     data () {
        return {
            menu: [
                { title: 'Поплавочная', url: '/', 
                    items: {
                        title: 'Поплавочная1', url: '/',
                        title: 'Поплавочная2', url: '/',
                        title: 'Поплавочная3', url: '/',
                        title: 'Поплавочная4', url: '/',
                    }
                },
                { title: 'Поплавочная', url: '/', 
                    items: {
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                    }
                },
                { title: 'Поплавочная', url: '/', 
                    items: {
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                    }
                },
                { title: 'Поплавочная', url: '/', 
                    items: {
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                    }
                },
                { title: 'Поплавочная', url: '/', 
                    items: {
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                    }
                },
                { title: 'Поплавочная', url: '/', 
                    items: {
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                    }
                },
                { title: 'Поплавочная', url: '/', 
                    items: {
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                        title: 'Поплавочная', url: '/',
                    }
                },
            ]
        }
    }
});
</script>

<style>
.footer {
    background-color: rgb(236, 236, 236);
    width: 100%;
    padding: 10px;
}
</style>
