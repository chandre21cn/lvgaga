define(['jquery'],{
        hname:location.hostname?location.hostname:'localStatus',
        isLocalStorage:window.localStorage?true:false,
        dataDom:null,
        hashCode : function(str) {
            var h = 0;
            var len = str.length;
            var t = 2147483648;
            for (var i = 0; i < len; i++) {
                h = 31 * h + str.charCodeAt(i);
                if(h > 2147483647) h %= t;// int溢出则取模
            }
            return 'S'+h.toString();
        },
        initDom:function(){ //初始化userData
            if(!this.dataDom){
                try{
                    this.dataDom = document.createElement('input');//这里使用hidden的input元素
                    this.dataDom.type = 'hidden';
                    this.dataDom.style.display = "none";
                    this.dataDom.addBehavior('#default#userData');//这是userData的语法

                    document.body.appendChild(this.dataDom);
                    var exDate = new Date();
                    exDate.setDate(exDate.getDate()+30);
                    this.dataDom.expires = exDate.toUTCString();//设定过期时间
                }catch(ex){
                    return false;
                }
            }
            return true;
        },
        set:function(key,value){
            var hashkey;
            hashkey = this.hashCode(key);
            if(this.isLocalStorage){
                window.localStorage.setItem(hashkey,value);
            }else{
                if(this.initDom()){
                    this.dataDom.load(this.hname);
                    this.dataDom.setAttribute(hashkey,value);
                    this.dataDom.save(this.hname)
                    
                }
            }
        },
        get:function(key){
            var re,hashkey;

            hashkey = this.hashCode(key);
            
            if(this.isLocalStorage){
                re = window.localStorage.getItem(hashkey);
            }else{
                if(this.initDom()){
                    this.dataDom.load(this.hname);
                    re = this.dataDom.getAttribute(hashkey);
                }
            }
            if (re==null){
                $.ajax({
                    url : '/member/templates/'+key+'.tpl',
                    success : function(request){
                        re = request;
                    },
                    dataType : 'text',
                    async : false

                });
                //this.set(key,re);
            }
            return re;
        },
        remove:function(key){
            var hashkey;
            hashkey = this.hashCode(key);
            if(this.isLocalStorage){
                localStorage.removeItem(hashkey);
            }else{
                if(this.initDom()){
                    this.dataDom.load(this.hname);
                    this.dataDom.removeAttribute(hashkey);
                    this.dataDom.save(this.hname)
                }
            }
        }

    });