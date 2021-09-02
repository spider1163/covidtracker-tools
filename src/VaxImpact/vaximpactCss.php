<style>

.boxshadow{
    border: 1px solid black;
    padding: 6px;
    border-radius: 5px;
    color:black;
}

.btn-inactif{
    border: 1px solid white;
    padding: 6px;
    border-radius: 5px;
    color:black;
}

.btn-inactif:hover{
    border: 1px solid black;
    background-color: lightgrey;
    padding: 6px;
    border-radius: 5px;
    color:white;
}

.shadow {
    border: 0px solid black;
    padding: 12px;
    border-radius: 7px;
    text-align: left;
    box-shadow: 0 0 0 transparent, 0 0 0 transparent, 6px 4px 25px #d6d6d6;
    background: #ffffff;
    margin-top: 10px;
    }

p {
    font-size: 17px;
}

.wrap {
    display: flex;
    margin-top: 0px;
    flex-wrap: wrap;
    }

.wrap>* {
    flex: 1 1 180px;
}

.boxshadow {
    border: 0px solid black;
    margin-top: 18px;
    padding: 10px 10px 10px 10px;
    border-radius: 7px;
    margin-right: 15px;
    max-width: 500px;
    text-align: left;
    /*box-shadow: 6px 4px 25px #c3d19d;*/
    box-shadow: 0 0 0 transparent, 0 0 0 transparent, 6px 4px 25px #d6d6d6;
    width: 100%;
    background: #ffffff;
    }

.boxshadow-wide {
    border: 0px solid black;
    margin-top: 18px;
    padding: 10px 10px 10px 10px;
    border-radius: 7px;
    margin-right: 15px;
    max-width: 800px;
    text-align: left;
    /*box-shadow: 6px 4px 25px #c3d19d;*/
    box-shadow: 0 0 0 transparent, 0 0 0 transparent, 6px 4px 25px #d6d6d6;
    width: 100%;
    background: #ffffff;
}

.title_h2 {
    margin-top: 30px;
    margin-bottom: 10px;
}

.title {
    margin-top: 50px;
}

.custom_picker{
    background-color: #f7f7f7 !important;
    box-shadow: none !important;
}

.disable_link {
    pointer-events:none;
}

.select_region {

    border:2px solid lightgray;
    border-radius:10px;
    padding:6px;
    font-size:1vw;
    width:100%;
}

.emphasis {
font-weight:bold;
color:#e76f51;
    
}

.slider:before{
content : 'aaa';
}

.slider { 
    -webkit-appearance: none;
    position: relative;
    overflow: hidden;
    height: 40px;
    width: 600px;
    cursor: pointer;
    border-radius: 0; /* iOS */
}

::-webkit-slider-runnable-track {
    background: #ddd;
}

/*
 * 1. Set to 0 width and remove border for a slider without a thumb
 */
::-webkit-slider-thumb {
    -webkit-appearance: none;
    width: 20px; /* 1 */
    height: 40px;
    background: #fff;
    box-shadow: -100vw 0 0 100vw dodgerblue;
    border: 2px solid #999; /* 1 */
}


::-moz-range-track {
    height: 40px;
    background: #ddd;
}

::-moz-range-thumb {
    background: #fff;
    height: 40px;
    width: 20px;
    border: 3px solid #999;
    border-radius: 0 !important;
    box-shadow: -100vw 0 0 100vw dodgerblue;
    box-sizing: border-box;
}

::-ms-fill-lower { 
    background: dodgerblue;
}

::-ms-thumb { 
    background: #fff;
    border: 2px solid #999;
    height: 40px;
    width: 20px;
    box-sizing: border-box;
}

::-ms-ticks-after { 
    display: none; 
}

::-ms-ticks-before { 
    display: none; 
}

::-ms-track { 
    background: #ddd;
    color: transparent;
    height: 40px;
    border: none;
}

::-ms-tooltip { 
    display: none;
}
</style>