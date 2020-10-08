<template>
				              	<form method="GET" role="search" id="search-form" :action="route" class="search-job">
				              		<div class="row no-gutters">
				              			<div class="col-md mr-md-2">
				              				<div class="form-group">
					              				<div class="form-field">
					              					<div class="icon"><span class="icon-briefcase"></span></div>
									                <input type="text" class="form-control" placeholder="eg. Garphic. Web Developer">
									              </div>
								              </div>
				              			</div>
				              			<div class="col-md mr-md-2">
				              				<div class="form-group">
				              					<div class="form-field">
					              					<div class="select-wrap">
							                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
							                      <select name="" id="" class="form-control">
							                      	<option  v-for="(category, index) in $root.sharedRootCategories" :key="index" :value="category.id">{{category.name}}</option>
							                      </select>
							                    </div>
									              </div>
								              </div>
				              			</div>
				              			<div class="col-md mr-md-2">
				              				<div class="form-group">
				              					<div class="form-field">
					              					<div class="icon"><span class="icon-map-marker"></span></div>
									                <input type="text" class="form-control" placeholder="Location">
									              </div>
								              </div>
				              			</div>
				              			<div class="col-md">
				              				<div class="form-group">
				              					<div class="form-field">
								                	<button type="submit" class="form-control btn btn-primary">Search</button>
									              </div>
								              </div>
				              			</div>
				              		</div>
				              	</form>
</template>

<script>
    export default {
        props: ['route', 'iscustomer'],
        data(){
            return{
                compareCount: 0,
                wishlistCount: 0,
                searchedQuery: [],
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        created: function () {
            let searchedItem = window.location.search.replace("?", "");
            searchedItem = searchedItem.split('&');

            let updatedSearchedCollection = {};

            searchedItem.forEach(item => {
                let splitedItem = item.split('=');
                updatedSearchedCollection[splitedItem[0]] = splitedItem[1];
            });

            this.searchedQuery = updatedSearchedCollection;
        },

    }
</script>
