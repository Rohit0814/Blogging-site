<x-user-view>
    <div style="padding: 0px 80px;">
        <form action = '/users/posts' method="Post">
            @csrf
            <div class="d-flex justify-content-between">
                <h3>Blog Post</h3>
                <button type="submit" class="btn btn-success" style="margin-right: 30px; width:100px">Post <i
                        class="fa-solid fa-file-import"></i></button>
            </div><br>
            <input type="text" name="title" placeholder="Heading" style="width:100%; padding:5px 20px;font-size:20px"
                value="{{ old('title') }}"><br>
            <span style="color:red; font-weight:bolder">
                @error('title')
                    {{ $message }}
                @enderror
            </span>
            <br>
            <div class="full-width">
                <div>
                    <select class="select-font" onchange="fontSelected()" id="select-font">
                        <optgroup label="Theme Fonts">
                            <option>calibri</option>
                            <option>calibri Light</option>
                        </optgroup>
                        <optgroup label="All Fonts">
                            <option>Algerian</option>
                            <option>Arial Black</option>
                            <option>Aptos</option>
                            <option>Arial Narrow</option>
                        </optgroup>
                    </select>

                    <select class="select-font-size">
                        <option>1</option>
                        <option>12</option>
                        <option>14</option>
                        <option>16</option>
                        <option>18</option>
                        <option>20</option>
                    </select>

                    <button type="button"
                        style="font-size:20px; background:rgb(46, 46, 46); border:none; color:white"><i
                            class="fa-solid fa-subscript"></i></button>
                    <button type="button"
                        style="font-size:18px; background:rgb(46, 46, 46); border:none; color:white"><i
                            class="fa-solid fa-superscript"></i></button>

                    <span style="color:rgb(161, 159, 159); font-size:20px;">|</span>

                    <div class="select-container-case">
                        <div class="select-box-case" onclick="toggleOptionscase()">
                            Aa <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <ul class="select-options-case">
                            <li>Upper Case</li>
                            <li>Lower Case</li>
                            <li>Sentence Case</li>
                            <li>Capitalize Each Word</li>
                            <li>Toogle Each Case</li>
                        </ul>
                    </div>
                    <span style="color:rgb(161, 159, 159); font-size:20px;">|</span>

                    <div class="select-container-light">
                        <div class="select-box-light" onclick="toggleOptionslight()">
                            <i class="fa-solid fa-list"></i> <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <ul class="select-options-light">
                            <li><i class="fa-solid fa-circle"></i></li>
                            <li><i class="fa-regular fa-circle"></i></li>
                            <li><i class="fa-solid fa-square"></i></li>
                            <li><i class="fa-solid fa-litecoin-sign"></i></li>
                            <li><i class="fa-solid fa-diamond"></i></li>
                            <li><i class="fa-solid fa-caret-right"></i></li>
                            <li><i class="fa-solid fa-check"></i></li>
                        </ul>
                    </div>&nbsp;&nbsp;


                    <div class="select-container-ol">
                        <div class="select-box-ol" onclick="toggleOptionsol()">
                            <i class="fa-solid fa-list-ol"></i> <i class="fa-solid fa-caret-down"></i>
                        </div>
                        <ul class="select-options-ol">
                            <li>1.______<br>2.______<br>3.______</li>
                            <li>1)______<br>2)______<br>3)______</li>
                            <li>i.______<br>ii._____<br>iii._____</li>
                            <li>I.______<br>II._____<br>III._____</i></li>
                            <li>A.______<br>B.______<br>C.______</i></li>
                            <li>a.______<br>b.______<br>c.______</i></li>
                            <li>a)______<br>b)______<br>c)______</i></li>
                        </ul>
                    </div>

                    <span style="color:rgb(161, 159, 159); font-size:20px;">|</span>

                    <button type="button" style=""><i class="fa-solid fa-align-left"></i></button>
                    <button type="button" style=""><i class="fa-solid fa-align-center"></i></button>
                    <button type="button" style=""><i class="fa-solid fa-align-right"></i></button>
                    <button type="button" style=""><i class="fa-solid fa-align-justify"></i></button>
                    &nbsp;&nbsp;&nbsp;
                    <span style="color:rgb(161, 159, 159); font-size:20px;">|</span>
                    &nbsp;&nbsp;&nbsp;

                    <div class="upload-img">
                        <span class="upload-text">Upload Image</span>
                        <button type="button" class="btn upload-btn"><i class="fa-solid fa-upload"></i></button>
                    </div>

                </div>
                <div class="font-style-bot">
                    <button type="button" id="text-bold" style=" font-weight:bolder">B</button>
                    <button type="button" id="text-italic" style=" font-style:italic">I</button>
                    <button type="button" id="text-underline" style=" text-decoration:underline">U</button>
                    <button type="button" id="text-strik" style=" text-decoration: line-through">ab</button>
                    <button type="button">x<sub>2</sub></button>
                    <button type="button">x<sup>2</sup></button>
                    <span style="color: rgb(161, 159, 159); font-size:20px;">|</span>
                    <button type="button" style="width:fit-content";>
                        <input type="color" placeholder="Highlight">
                        <span style="display: inline;"><i class="fa-solid fa-highlighter"></i></span>
                    </button>

                    <button type="button" style="width:fit-content";>
                        <input type="color" placeholder="Font-color">
                        <span style="display: inline;"><i class="fa-solid fa-paintbrush"></i></span>
                    </button>&nbsp;&nbsp;&nbsp;&nbsp;

                    <select class="select-font">
                        <option>Sports</option>
                        <option>Technology</option>
                        <option>Programming</option>
                        <option selected>Categories</option>
                        <option>Automobiles</option>
                        <option>Politicle</option>
                    </select>

                    &nbsp;
                    <span style="color:rgb(161, 159, 159); font-size:20px;">|</span>
                    &nbsp;&nbsp;&nbsp;

                    <div class="Achcor-link">
                        <button type="button" class="btn Anchor-btn"><i class="fa-solid fa-link"></i>
                            HyperLink</button>
                    </div>

                </div>
            </div>
            <textarea rows="18" name="content" id="content-area" placeholder="Start Writing Here....."
                style="width:100%; resize:none; padding:20px 20px; font-size:17px">{{ old('content') }}</textarea><br>
            <span style="color:red; font-weight:bolder">
                @error('content')
                    {{ $message }}
                @enderror
            </span>
        </form>
    </div>

    <script>
        const
            toggelcase = document.querySelector('.select-options-case');

        function toggleOptionscase() {
            toggelcase.style.display =
                toggelcase.style.display === 'none' ? 'block' : 'none';
        }

        document.addEventListener("click", function() {
            var targetElement = event.target;
            var isInsideSelectContainer = targetElement.closest('.select-container-case');

            if (!isInsideSelectContainer) {
                toggelcase.style.display = 'none';
            }
        })

        const optionslight = document.querySelector('.select-options-light');

        function toggleOptionslight() {
            optionslight.style.display = optionslight.style.display === 'none' ? 'flex' : 'none';
        }

        document.addEventListener("click", function() {
            var targetElement = event.target;
            var isInsideSelectContainer = targetElement.closest('.select-container-light');

            if (!isInsideSelectContainer) {
                optionslight.style.display = 'none';
            }
        })


        const optionsol = document.querySelector('.select-options-ol');

        function toggleOptionsol() {
            optionsol.style.display = optionsol.style.display === 'none' ? 'flex' : 'none';
        }

        document.addEventListener("click", function() {
            var targetElement = event.target;
            var isInsideSelectContainer = targetElement.closest('.select-container-ol');

            if (!isInsideSelectContainer) {
                optionsol.style.display = 'none';
            }
        })
    </script>

</x-user-view>
