            <nav class="tm-nav">
              <ul>
                <li><a href="{{url('/')}}"  class="{{Request::is('/')? 'active' :''}}">Home</a></li>
                <li><a href="{{url('/today-special')}}" class="{{Request::is('today-special')? 'active' :''}}">Today Special</a></li>
                <li><a href="{{url('/menu')}}" class="{{Request::is('menu')? 'active' :''}}">Menu</a></li>
                <li><a href="{{url('/contact')}}" class="{{Request::is('contact')? 'active' :''}}">Contact</a></li>