@extends('layouts.layout-welcome')

@section('content')

    {{-- MAIN --}}
    <main>
        
        <div class="container">
            
            {{-- carousel --}}
            
            <div class="card-carousel-wrapper">
                <div class="card-carousel--nav__left" 
                    @click="moveCarousel(-1)" 
                    :disabled="atHeadOfList">
                </div>

                <div class="card-carousel">
                    <div class="card-carousel--overflow-container">
                        <div class="card-carousel-cards" 
                            :style="{ transform: 'translateX' + '(' + currentOffset + 'px' + ')' }">
                            
                            <div v-for="item in items"
                                :key="item.id">
    
                                <div class="card-carousel--card">
                                    <img :src="item.tag" alt="">
                                </div>
    
                                <div class="card-carousel--card--footer">
                                    <p>@{{ item.name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="card-carousel--nav__right" 
                    @click="moveCarousel(1)" 
                    :disabled="atEndOfList">
                </div>
        
            </div>
            {{-- end --}}  
            
            {{-- restaurants list --}}
            <section>
                <h1>Ristoranti</h1>
                
                <div class="restaurants">
                    
                    <div class="card">info che arrivano dal db</div> <!-- foreach componente ristorante-->
                    <div class="card">info</div>
                    <div class="card">info</div>
                    <div class="card">info</div>
                    <div class="card">info</div>
                    <div class="card">info</div>
                    
                </div>
            </section>
            {{-- end --}}
            
        </div>

    </main>

    {{-- FOOTER --}}
    <footer>
        <div class="container">
            <nav>
                <ul>
                    <li>Scopri deliveroo</li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                </ul>

                <ul>
                    <li>FAQ</li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                </ul>

                <ul>
                    <li>Aiuto</li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                </ul>

            </nav>

            <div class="copyright">copyright</div>
        </div>
    </footer>

    
    <script>
        export default {
            data() {
                return {
                    currentOffset: 0,
                    windowSize: 6,
                    paginationFactor: 200,
                    items: [
                        {name: 'Offers', tag: 'storage/img/offers.png'},
                        {name: 'Healthy', tag: 'storage/img/organic.png'},
                        {name: 'Kebab', tag: 'storage/img/kebab.png'},
                        {name: 'Dessert', tag: 'storage/img/dessert.png'},
                        {name: 'Poke', tag: 'storage/img/poke.png'},
                        {name: 'Gelato', tag: 'storage/img/ice-cream.png'},
                        {name: 'Pizza', tag: 'storage/img/pizza.png' },
                        {name: 'Hamburgher', tag: 'storage/img/burgers-1.png'},
                        {name: 'Sushi', tag: 'storage/img/sushi-1.png'},
                    ]
                }
            },
            computed: {
                atEndOfList() {
                    return this.currentOffset <= (this.paginationFactor * -1) * (this.items.length - this.windowSize);
                },
                atHeadOfList() {
                    return this.currentOffset === 0;
                },
            },
            methods: {
                moveCarousel(direction) {
                    if (direction === 1 && !this.atEndOfList) {
                        this.currentOffset -= this.paginationFactor;
                    } else if (direction === -1 && !this.atHeadOfList) {
                        this.currentOffset += this.paginationFactor;
                    }
                },
            }
        }
    </script>
@endsection
