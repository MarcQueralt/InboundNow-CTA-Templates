<style type="text/css">
    #kerpe-cta-content-wrapper {
        height:100%;
        width:100%;
    }
    #kerpe-cta-content-wrapper a {
        display:block;
        background-image: url('{{media}}');
        height:100%;
        width:100%;
        text-decoration:none;
    }
    #kerpe-cta-content-wrapper a .missatge {
        position: absolute;
        bottom: 10px;
        left: 0px;
        display: block;
        width: 75%;
        background-color:rgba(255,255,255,0.75);
        padding:5px 10px;
        min-height:65px;
        text-transform:uppercase;
        font-family: Anton, sans-serif;
        font-size: 28px;
        font-weight: normal;
        line-height: 30px;
        color:#303030;
    }
    #kerpe-cta-content-wrapper a .missatge.fonsFosc {
        background-color: rgba(0,0,0,0.5);
        color: #fff;
    }
</style>

<div id="kerpe-cta-content-wrapper">
    <a href="{{url}}">
        <div class="missatge{%if {{esFosc}} == true %} fonsFosc{% endif %}">{{text}}</div>
    </a>
</div> <!-- end #content-wrapper -->
</body>
</html>