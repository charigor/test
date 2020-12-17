<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Search Component</div>

                    <div class="card-body">
                        <form class="bd-search d-flex align-items-center">
                            <span class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;"><input type="search" class="form-control ds-input" id="search-input" v-model="searchResult" placeholder="Search..." aria-label="Search for..." autocomplete="off" data-docs-version="4.2" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="ds-dropdown-menu" role="listbox" id="algolia-autocomplete-listbox-0" style="position: absolute; top: 100%; z-index: 100; display: none; left: 0px; right: auto;"><div class="ds-dataset-1"></div></span></span>
                            <button class="btn btn-link bd-search-docs-toggle d-md-none p-0 ml-3" type="button" data-toggle="collapse" @click="search" data-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false" role="img"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path></svg>
                            </button>
                        </form>
                        <h3>DElETE</h3>
                        <form  @submit.prevent="del">
                            <input type="text" v-model="user_id">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                searchResult: "",
                user_id: ''
            }
        },
        methods: {
            search() {
                axios.post('/search').then((response) => {
                        console.log(response)
                })
            },
            del() {
                axios.post('/delete',{"user_id" : this.user_id}).then((response) => {
                    console.log(response.data)
                })
            }
        },
        mounted() {
            console.log('Search mounted.')
        }
    }
</script>
