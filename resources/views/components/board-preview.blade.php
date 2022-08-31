<style>
    label {
        cursor: pointer;
    }
    input:checked + label {
        background: red;
    }
</style>

<div class="grid gap-0 grid-cols-11 grid-rows-10 border-2 border-black text-center">
    {{-- Top --}}
    <input class="hidden" type='radio' value='20' name='position' id='20'/>
    <label class="hover:bg-sky-700" for='20'>20</label>

    <input class="hidden" type='radio' value='21' name='position' id='21'/>
    <label class="hover:bg-sky-700" for='21'>21</label>

    <input class="hidden" type='radio' value='22' name='position' id='22'/>
    <label class="hover:bg-sky-700" for='22'>22</label>

    <input class="hidden" type='radio' value='23' name='position' id='23'/>
    <label class="hover:bg-sky-700" for='23'>23</label>

    <input class="hidden" type='radio' value='24' name='position' id='24'/>
    <label class="hover:bg-sky-700" for='24'>24</label>

    <input class="hidden" type='radio' value='25' name='position' id='25'/>
    <label class="hover:bg-sky-700" for='25'>25</label>

    <input class="hidden" type='radio' value='26' name='position' id='26'/>
    <label class="hover:bg-sky-700" for='26'>26</label>

    <input class="hidden" type='radio' value='27' name='position' id='27'/>
    <label class="hover:bg-sky-700" for='27'>27</label>

    <input class="hidden" type='radio' value='28' name='position' id='28'/>
    <label class="hover:bg-sky-700" for='28'>28</label>

    <input class="hidden" type='radio' value='29' name='position' id='29'/>
    <label class="hover:bg-sky-700" for='29'>29</label>

    <input class="hidden" type='radio' value='30' name='position' id='30'/>
    <label class="hover:bg-sky-700" for='30'>30</label>

    {{-- Left/Right --}}
    <input class="hidden" type='radio' value='19' name='position' id='19'/>
    <label class="hover:bg-sky-700" for='19'>19</label>
    <span class="col-span-9 board-color"></span>
    <input class="hidden" type='radio' value='31' name='position' id='31'/>
    <label class="hover:bg-sky-700" for='31'>31</label>

    <span>18</span>
    <span class="col-span-9 board-color"></span>
    <span>32</span>

    <span>17</span>
    <span class="col-span-9 board-color"></span>
    <span>33</span>

    <span>16</span>
    <span class="col-span-9 board-color"></span>
    <span>34</span>
    
    <span>15</span>
    <span class="col-span-9 board-color"></span>
    <span>35</span>

    <span>14</span>
    <span class="col-span-9 board-color"></span>
    <span>36</span>

    <span>13</span>
    <span class="col-span-9 board-color"></span>
    <span>37</span>

    <span>12</span>
    <span class="col-span-9 board-color"></span>
    <span>38</span>

    <span>11</span>
    <span class="col-span-9 board-color"></span>
    <span>39</span>

    {{-- Bottom --}}
    <span>10</span>
    <span>9</span>
    <span>8</span>
    <span>7</span>
    <span>6</span>
    <span>5</span>
    <span>4</span>
    <span>3</span>
    <span>2</span>
    <span>1</span>        
    <span>0</span>
</div>