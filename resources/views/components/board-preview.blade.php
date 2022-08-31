<style>
    label {
        cursor: pointer;
    }
    input[name=position]:checked + label {
        background: rgb(12 74 110);
    }
</style>

<div class="grid gap-0 grid-cols-11 grid-rows-10 border-2 border-gray-200 text-center">
    {{-- Top --}}
    <input class="hidden" type='radio' value='20' name='position' id='20'/>
    <label class="border-r border-b hover:bg-sky-700" for='20'>20</label>

    <input class="hidden" type='radio' value='21' name='position' id='21'/>
    <label class="border-r hover:bg-sky-700" for='21'>21</label>

    <input class="hidden" type='radio' value='22' name='position' id='22'/>
    <label class="border-r hover:bg-sky-700" for='22'>22</label>

    <input class="hidden" type='radio' value='23' name='position' id='23'/>
    <label class="border-r hover:bg-sky-700" for='23'>23</label>

    <input class="hidden" type='radio' value='24' name='position' id='24'/>
    <label class="border-r hover:bg-sky-700" for='24'>24</label>

    <input class="hidden" type='radio' value='25' name='position' id='25'/>
    <label class="border-r hover:bg-sky-700" for='25'>25</label>

    <input class="hidden" type='radio' value='26' name='position' id='26'/>
    <label class="border-r hover:bg-sky-700" for='26'>26</label>

    <input class="hidden" type='radio' value='27' name='position' id='27'/>
    <label class="border-r hover:bg-sky-700" for='27'>27</label>

    <input class="hidden" type='radio' value='28' name='position' id='28'/>
    <label class="border-r hover:bg-sky-700" for='28'>28</label>

    <input class="hidden" type='radio' value='29' name='position' id='29'/>
    <label class="border-r hover:bg-sky-700" for='29'>29</label>

    <input class="hidden" type='radio' value='30' name='position' id='30'/>
    <label class="hover:bg-sky-700" for='30'>30</label>

    {{-- Left/Right --}}
    <input class="hidden" type='radio' value='19' name='position' id='19'/>
    <label class="border-b hover:bg-sky-700" for='19'>19</label>
    <span class="col-span-9 bg-gray-300"></span>
    <input class="hidden" type='radio' value='31' name='position' id='31'/>
    <label class="hover:bg-sky-700" for='31'>31</label>

    <input class="hidden" type='radio' value='18' name='position' id='18'/>
    <label class="hover:bg-sky-700" for='18'>18</label>
    <span class="col-span-9 bg-gray-300"></span>
    <input class="hidden" type='radio' value='32' name='position' id='32'/>
    <label class="hover:bg-sky-700" for='32'>32</label>

    <input class="hidden" type='radio' value='17' name='position' id='17'/>
    <label class="hover:bg-sky-700" for='17'>17</label>
    <span class="col-span-9 bg-gray-300"></span>
    <input class="hidden" type='radio' value='33' name='position' id='33'/>
    <label class="hover:bg-sky-700" for='33'>33</label>

    <input class="hidden" type='radio' value='16' name='position' id='16'/>
    <label class="hover:bg-sky-700" for='16'>16</label>
    <span class="col-span-9 bg-gray-300"></span>
    <input class="hidden" type='radio' value='34' name='position' id='34'/>
    <label class="hover:bg-sky-700" for='34'>34</label>
    
    <input class="hidden" type='radio' value='15' name='position' id='15'/>
    <label class="hover:bg-sky-700" for='15'>15</label>
    <span class="col-span-9 bg-gray-300"></span>
    <input class="hidden" type='radio' value='35' name='position' id='35'/>
    <label class="hover:bg-sky-700" for='35'>35</label>

    <input class="hidden" type='radio' value='14' name='position' id='14'/>
    <label class="hover:bg-sky-700" for='14'>14</label>
    <span class="col-span-9 bg-gray-300"></span>
    <input class="hidden" type='radio' value='36' name='position' id='36'/>
    <label class="hover:bg-sky-700" for='36'>36</label>

    <input class="hidden" type='radio' value='13' name='position' id='13'/>
    <label class="hover:bg-sky-700" for='13'>13</label>
    <span class="col-span-9 bg-gray-300"></span>
    <input class="hidden" type='radio' value='37' name='position' id='37'/>
    <label class="hover:bg-sky-700" for='37'>37</label>

    <input class="hidden" type='radio' value='12' name='position' id='12'/>
    <label class="hover:bg-sky-700" for='12'>12</label>
    <span class="col-span-9 bg-gray-300"></span>
    <input class="hidden" type='radio' value='38' name='position' id='38'/>
    <label class="hover:bg-sky-700" for='38'>38</label>

    <input class="hidden" type='radio' value='11' name='position' id='11'/>
    <label class="hover:bg-sky-700" for='11'>11</label>
    <span class="col-span-9 bg-gray-300"></span>
    <input class="hidden" type='radio' value='39' name='position' id='39'/>
    <label class="hover:bg-sky-700" for='39'>39</label>

    {{-- Bottom --}}
    <input class="hidden" type='radio' value='10' name='position' id='10'/>
    <label class="hover:bg-sky-700" for='10'>10</label>

    <input class="hidden" type='radio' value='9' name='position' id='9'/>
    <label class="hover:bg-sky-700" for='9'>9</label>

    <input class="hidden" type='radio' value='8' name='position' id='8'/>
    <label class="hover:bg-sky-700" for='8'>8</label>

    <input class="hidden" type='radio' value='7' name='position' id='7'/>
    <label class="hover:bg-sky-700" for='7'>7</label>

    <input class="hidden" type='radio' value='6' name='position' id='6'/>
    <label class="hover:bg-sky-700" for='6'>6</label>

    <input class="hidden" type='radio' value='5' name='position' id='5'/>
    <label class="hover:bg-sky-700" for='5'>5</label>

    <input class="hidden" type='radio' value='4' name='position' id='4'/>
    <label class="hover:bg-sky-700" for='4'>4</label>

    <input class="hidden" type='radio' value='3' name='position' id='3'/>
    <label class="hover:bg-sky-700" for='3'>3</label>

    <input class="hidden" type='radio' value='2' name='position' id='2'/>
    <label class="hover:bg-sky-700" for='2'>2</label>

    <input class="hidden" type='radio' value='1' name='position' id='1'/>
    <label class="hover:bg-sky-700" for='1'>1</label>

    <input class="hidden" type='radio' value='0' name='position' id='0'/>
    <label class="hover:bg-sky-700" for='0'>0</label>
</div>