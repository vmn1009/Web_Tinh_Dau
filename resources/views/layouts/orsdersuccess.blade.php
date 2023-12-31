@extends('client.blocks.master')
@section('body')
<style>
    @keyframes scaleAnimation {
        0% {
            opacity: 0;
            transform: scale(1.5);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes drawCircle {
        0% {
            stroke-dashoffset: $circle-length;
        }
        100% {
            stroke-dashoffset: 0;
        }
    }

    @keyframes drawCheck {
        0% {
            stroke-dashoffset: $check-length;
        }
        100% {
            stroke-dashoffset: 0;
        }
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    #successAnimationCircle {
        stroke-dasharray: $circle-length $circle-length;
        stroke: #FFF;
    }

    #successAnimationCheck {
        stroke-dasharray: $check-length $check-length;
        stroke: #FFF;
    }

    #successAnimationResult {
        fill: #FFF;
        opacity: 0;
    }

    #successAnimation.animated {
        animation: 1s ease-out 0s 1 both scaleAnimation;

    #successAnimationCircle {
        animation: 1s cubic-bezier(0.77, 0, 0.175, 1) 0s 1 both drawCircle,
        0.3s linear 0.9s 1 both fadeOut;
    }

    #successAnimationCheck {
        animation: 1s cubic-bezier(0.77, 0, 0.175, 1) 0s 1 both drawCheck,
        0.3s linear 0.9s 1 both fadeOut;
    }

    #successAnimationResult {
        animation: 0.3s linear 0.9s both fadeIn;
    }
    }

    #replay {
        background: rgba(255,255,255,0.2);
        border: 0;
        border-radius: 3px;
        bottom: 100px;
        color: #FFF;
        left: 50%;
        outline: 0;
        padding: 10px 30px;
        position: absolute;
        transform: translateX(-50%);
    &:active {
         background: rgba(255,255,255,0.1);
     }
    }
</style>
<svg id="successAnimation" class="animated" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
    <path id="successAnimationResult" fill="#D8D8D8" d="M35,60 C21.1928813,60 10,48.8071187 10,35 C10,21.1928813 21.1928813,10 35,10 C48.8071187,10 60,21.1928813 60,35 C60,48.8071187 48.8071187,60 35,60 Z M23.6332378,33.2260427 L22.3667622,34.7739573 L34.1433655,44.40936 L47.776114,27.6305926 L46.223886,26.3694074 L33.8566345,41.59064 L23.6332378,33.2260427 Z"/>
    <circle id="successAnimationCircle" cx="35" cy="35" r="24" stroke="#979797" stroke-width="2" stroke-linecap="round" fill="transparent"/>
    <polyline id="successAnimationCheck" stroke="#979797" stroke-width="2" points="23 34 34 43 47 27" fill="transparent"/>
</svg>
<button id="replay">Replay</button>
<script>
    var animation = document.getElementById('successAnimation');
    var restart = document.getElementById('replay');

    restart.addEventListener('click', function(e) {
        e.preventDefault;
        animation.classList.remove('animated');
        void animation.parentNode.offsetWidth;
        animation.classList.add('animated');
    }, false);
</script>
@endsection
