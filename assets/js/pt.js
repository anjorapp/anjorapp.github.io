/* Licensed under the Apache License, Version 2.0. (http://www.apache.org/licenses/LICENSE-2.0). Copyright 2015-2016 William Ngan. (https://github.com/williamngan/pt/) */

var CanvasSpace, Circle, Color, Const, Curve, DOMSpace, Delaunay, Easing, Form, Grid, GridCascade, Line, Matrix, Noise, Pair, Particle, ParticleEmitter, ParticleField, ParticleSystem, Point, PointSet, QuadTree, Rectangle, SVGForm, SVGSpace, SamplePoints, Space, StripeBound, Timer, Triangle, UI, Util, Vector, bind = function(t, i) {
        return function() {
            return t.apply(i, arguments)
        }
    },
    extend = function(t, i) {
        function e() {
            this.constructor = t
        }
        for (var n in i) hasProp.call(i, n) && (t[n] = i[n]);
        return e.prototype = i.prototype, t.prototype = new e, t.__super__ = i.prototype, t
    },
    hasProp = {}.hasOwnProperty,
    slice = [].slice;
Const = function() {
    function t() {}
    return t.xy = "xy", t.yz = "yz", t.xz = "xz", t.xyz = "xyz", t.identical = -1, t.right = 3, t.bottom_right = 4, t.bottom = 5, t.bottom_left = 6, t.left = 7, t.top_left = 0, t.top = 1, t.top_right = 2, t.sideLabels = ["identical", "right", "bottom right", "bottom", "bottom left", "left", "top left", "top", "top right"], t.epsilon = 1e-4, t.pi = Math.PI, t.two_pi = 6.283185307179586, t.half_pi = 1.5707963267948966, t.quarter_pi = .7853981633974483, t.one_degree = .017453292519943295, t.rad_to_deg = 57.29577951308232, t.deg_to_rad = .017453292519943295, t.gravity = 9.81, t.newton = .10197, t.gaussian = .3989422804014327, t
}(), this.Const = Const, Matrix = function() {
    function t() {}
    return t.rotateAnchor2D = function(t, i, e) {
        var n, s, r;
        return null == e && (e = Const.xy), n = i.get2D(e), s = Math.cos(t), r = Math.sin(t), [s, r, 0, -r, s, 0, n.x * (1 - s) + n.y * r, n.y * (1 - s) - n.x * r, 1]
    }, t.reflectAnchor2D = function(t, i) {
        var e, n, s, r;
        return null == i && (i = Const.xy), s = t.intercept(i), e = 2 * Math.atan(s.slope), n = Math.cos(e), r = Math.sin(e), [n, r, 0, r, -n, 0, -s.yi * r, s.yi + s.yi * n, 1]
    }, t.shearAnchor2D = function(t, i, e, n) {
        var s, r, o;
        return null == n && (n = Const.xy), s = e.get2D(n), r = Math.tan(t), o = Math.tan(i), [1, r, 0, o, 1, 0, -s.y * o, -s.x * r, 1]
    }, t.scaleAnchor2D = function(t, i, e, n) {
        var s;
        return null == n && (n = Const.xy), s = e.get2D(n), [t, 0, 0, 0, i, 0, -s.x * t + s.x, -s.y * i + s.y, 1]
    }, t.scale2D = function(t, i) {
        return [t, 0, 0, 0, i, 0, 0, 0, 1]
    }, t.shear2D = function(t, i) {
        return [1, Math.tan(t), 0, Math.tan(i), 1, 0, 0, 0, 1]
    }, t.rotate2D = function(t, i) {
        return [t, i, 0, -i, t, 0, 0, 0, 1]
    }, t.translate2D = function(t, i) {
        return [1, 0, 0, 0, 1, 0, t, i, 1]
    }, t.transform2D = function(t, i, e, n) {
        var s, r, o;
        return null == e && (e = Const.xy), null == n && (n = !1), s = t.get2D(e), r = s.x * i[0] + s.y * i[3] + i[6], o = s.x * i[1] + s.y * i[4] + i[7], s.x = r, s.y = o, s = s.get2D(e, !0), n ? s : (t.set(s), t)
    }, t
}(), this.Matrix = Matrix, Util = function() {
    function t() {}
    return t.toRadian = function(t) {
        return t * Const.deg_to_rad
    }, t.toDegree = function(t) {
        return t * Const.rad_to_deg
    }, t.toHexColor = function(t) {
        var i;
        return i = Math.floor(t).toString(16), 1 === i.length ? "0" + i : i
    }, t.toRGBColor = function(t, i, e) {
        var n, s, r;
        return null == i && (i = !1), null == e && (e = 1), "#" === t[0] && (t = t.substr(1)), 3 === t.length ? (r = parseInt(t[0] + t[0], 16), s = parseInt(t[1] + t[1], 16), n = parseInt(t[2] + t[2], 16)) : t.length >= 6 ? (r = parseInt(t[0] + t[1], 16), s = parseInt(t[2] + t[3], 16), n = parseInt(t[4] + t[5], 16)) : (r = 0, s = 0, n = 0), i ? "rgba(" + r + "," + s + "," + n + "," + e + ")" : [r, s, n, e]
    }, t.bound = function(t, i, e) {
        var n, s;
        return null == e && (e = !1), n = t % i, s = i / 2, n > s ? n -= i : -s > n && (n += i), e && 0 > n ? n + i : n
    }, t.boundAngle = function(i, e) {
        return t.bound(i, 360, e)
    }, t.boundRadian = function(i, e) {
        return t.bound(i, Const.two_pi, e)
    }, t.boundingBox = function(t, i) {
        var e, n, s, r, o;
        for (null == i && (i = !1), r = new Point(Number.POSITIVE_INFINITY, Number.POSITIVE_INFINITY), s = new Point(Number.NEGATIVE_INFINITY, Number.NEGATIVE_INFINITY), e = 0, n = t.length; n > e; e++) o = t[e], o.x < r.x && (r.x = o.x), o.y < r.y && (r.y = o.y), o.x > s.x && (s.x = o.x), o.y > s.y && (s.y = o.y), i && (o.z < r.z && (r.z = o.z), o.z > s.z && (s.z = o.z));
        return new Rectangle(r).to(s)
    }, t.lerp = function(t, i, e) {
        return (1 - e) * t + e * i
    }, t.centroid = function(t) {
        var i, e, n, s;
        for (e = new Vector, i = 0, n = t.length; n > i; i++) s = t[i], e.add(s);
        return e.divide(t.length)
    }, t.same = function(t, i, e) {
        return null == e && (e = Const.epsilon), Math.abs(t - i) < e
    }, t.within = function(t, i, e) {
        return t >= Math.min(i, e) && t <= Math.max(i, e)
    }, t.randomRange = function(t, i) {
        var e;
        return null == i && (i = 0), e = t > i ? t - i : i - t, t + Math.random() * e
    }, t.mixin = function(t, i) {
        var e, n;
        for (e in i) n = i[e], i.hasOwnProperty(e) && (t.prototype[e] = i[e]);
        return t
    }, t.extend = function(t, i) {
        return t.prototype = Object.create(i.prototype), t.prototype.constructor = t, t
    }, t.clonePoints = function(t) {
        var i, e, n, s;
        for (s = [], i = 0, e = t.length; e > i; i++) n = t[i], s.push(n.clone());
        return s
    }, t.contextRotateOrigin = function(t, i, e, n, s) {
        var r, o;
        return null == n && (n = !1), o = i.size(), n || (n = o.$multiply(.5), n.add(i)), s && (r = s.size(), Form.rect(t, s), t.clip()), t.translate(n.x, n.y), t.rotate(e), t.translate(-n.x, -n.y)
    }, t.sinCosTable = function() {
        var t, i, e, n;
        for (i = [], n = [], e = t = 0; 360 >= t; e = t += 1) i[e] = Math.cos(e * Math.PI / 180), n[e] = Math.sin(e * Math.PI / 180);
        return {
            sin: n,
            cos: i
        }
    }, t.chance = function(t) {
        return Math.random() < t
    }, t.gaussian = function(t, i, e) {
        return null == i && (i = 0), null == e && (e = 1), t = (t - i) / e, Const.gaussian * Math.exp(-.5 * t * t) / e
    }, t
}(), this.Util = Util, Timer = function() {
    function t(t) {
        null == t && (t = 1e3), this.duration = t, this._time = 0, this._ease = function(t, i, e, n) {
            return t / n
        }, this._intervalID = -1
    }
    return t.prototype.start = function(t) {
        var i;
        return i = Math.min(Date.now() - this._time, this.duration), t || i >= this.duration ? this._time = Date.now() : void 0
    }, t.prototype.setEasing = function(t) {
        return this._ease = t
    }, t.prototype.check = function() {
        var t;
        return t = Math.min(Date.now() - this._time, this.duration), this._ease(t, 0, 1, this.duration)
    }, t.prototype.track = function(t) {
        var i;
        return clearInterval(this._intervalID), this.start(!0), i = this, this._intervalID = setInterval(function() {
            var e;
            return e = i.check(), t(e), e >= 1 ? clearInterval(i._intervalID) : void 0
        }, 25), this._intervalID
    }, t
}(), this.Timer = Timer, Space = function() {
    function t(t) {
        null == t && (t = "space"), this.id = t, this.size = new Vector, this.center = new Vector, this._timePrev = 0, this._timeDiff = 0, this._timeEnd = -1, this.items = {}, this._animID = -1, this._animCount = 0, this._animPause = !1, this._refresh = !0
    }
    return t.prototype.refresh = function(t) {
        return this._refresh = t, this
    }, t.prototype.render = function(t) {
        return this
    }, t.prototype.resize = function(t, i) {}, t.prototype.clear = function() {}, t.prototype.add = function(t) {
        var i;
        if (null == t.animate || "function" != typeof t.animate) throw "a player object for Space.add must define animate()";
        return i = this._animCount++, this.items[i] = t, t.animateID = i, null != t.onSpaceResize && t.onSpaceResize(this.size.x, this.size.y), this
    }, t.prototype.remove = function(t) {
        return delete this.items[t.animateID], this
    }, t.prototype.removeAll = function() {
        return this.items = {}, this
    }, t.prototype.play = function(t) {
        var i;
        if (null == t && (t = 0), this._animID = requestAnimationFrame(function(t) {
                return function(i) {
                    return t.play(i)
                }
            }(this)), !this._animPause) {
            this._timeDiff = t - this._timePrev;
            try {
                this._playItems(t)
            } catch (e) {
                throw i = e, cancelAnimationFrame(this._animID), console.error(i.stack), i
            }
            return this._timePrev = t, this
        }
    }, t.prototype._playItems = function(t) {
        var i, e, n;
        this._refresh && this.clear(), e = this.items;
        for (i in e) n = e[i], n.animate(t, this._timeDiff, this.ctx);
        return this._timeEnd >= 0 && t > this._timeEnd && cancelAnimationFrame(this._animID), this
    }, t.prototype.pause = function(t) {
        return null == t && (t = !1), this._animPause = t ? !this._animPause : !0, this
    }, t.prototype.resume = function() {
        return this._animPause = !1, this
    }, t.prototype.stop = function(t) {
        return null == t && (t = 0), this._timeEnd = t, this
    }, t.prototype.playTime = function(t) {
        return null == t && (t = 5e3), this.play(), this.stop(t)
    }, t.prototype.bindCanvas = function(t, i) {
        return this.space.addEventListener ? this.space.addEventListener(t, i) : void 0
    }, t.prototype.bindMouse = function(t) {
        return null == t && (t = !0), this.space.addEventListener && this.space.removeEventListener ? t ? (this.space.addEventListener("mousedown", this._mouseDown.bind(this)), this.space.addEventListener("mouseup", this._mouseUp.bind(this)), this.space.addEventListener("mouseover", this._mouseOver.bind(this)), this.space.addEventListener("mouseout", this._mouseOut.bind(this)), this.space.addEventListener("mousemove", this._mouseMove.bind(this))) : (this.space.removeEventListener("mousedown", this._mouseDown.bind(this)), this.space.removeEventListener("mouseup", this._mouseUp.bind(this)), this.space.removeEventListener("mouseover", this._mouseOver.bind(this)), this.space.removeEventListener("mouseout", this._mouseOut.bind(this)), this.space.removeEventListener("mousemove", this._mouseMove.bind(this))) : void 0
    }, t.prototype.bindTouch = function(t) {
        return null == t && (t = !0), this.space.addEventListener && this.space.removeEventListener ? t ? (this.space.addEventListener("touchstart", this._mouseDown.bind(this)), this.space.addEventListener("touchend", this._mouseUp.bind(this)), this.space.addEventListener("touchmove", function(t) {
            return function(i) {
                return i.preventDefault(), t._mouseMove(i)
            }
        }(this)), this.space.addEventListener("touchcancel", this._mouseOut.bind(this))) : (this.space.removeEventListener("touchstart", this._mouseDown.bind(this)), this.space.removeEventListener("touchend", this._mouseUp.bind(this)), this.space.removeEventListener("touchmove", this._mouseMove.bind(this)), this.space.removeEventListener("touchcancel", this._mouseOut.bind(this))) : void 0
    }, t.prototype.touchesToPoints = function(t, i) {
        var e;
        return null == i && (i = "touches"), t && t[i] ? function() {
            var n, s, r, o;
            for (r = t[i], o = [], n = 0, s = r.length; s > n; n++) e = r[n], o.push(new Vector(e.pageX - this.boundRect.left, e.pageY - this.boundRect.top));
            return o
        }.call(this) : []
    }, t.prototype._mouseAction = function(t, i) {
        var e, n, s, r, o, h, u, a, c;
        if (i.touches || i.changedTouches) {
            o = this.items, u = [];
            for (n in o) c = o[n], null != c.onTouchAction ? (e = i.changedTouches && i.changedTouches.length > 0, s = e ? i.changedTouches.item(0).pageX : 0, r = e ? i.changedTouches.item(0).pageY : 0, u.push(c.onTouchAction(t, s, r, i))) : u.push(void 0);
            return u
        }
        h = this.items, a = [];
        for (n in h) c = h[n], null != c.onMouseAction ? (s = i.offsetX || i.layerX, r = i.offsetY || i.layerY, a.push(c.onMouseAction(t, s, r, i))) : a.push(void 0);
        return a
    }, t.prototype._mouseDown = function(t) {
        return this._mouseAction("down", t), this._mdown = !0
    }, t.prototype._mouseUp = function(t) {
        return this._mouseAction("up", t), this._mdrag && this._mouseAction("drop", t), this._mdown = !1, this._mdrag = !1
    }, t.prototype._mouseMove = function(t) {
        return this._mouseAction("move", t), this._mdown ? (this._mdrag = !0, this._mouseAction("drag", t)) : void 0
    }, t.prototype._mouseOver = function(t) {
        return this._mouseAction("over", t)
    }, t.prototype._mouseOut = function(t) {
        return this._mouseAction("out", t), this._mdrag && this._mouseAction("drop", t), this._mdrag = !1
    }, t
}(), this.Space = Space, CanvasSpace = function(t) {
    function i(t, e, n) {
        null == t && (t = "pt_space"), null == e && (e = !1), null == n && (n = "2d"), this._resizeHandler = bind(this._resizeHandler, this), i.__super__.constructor.apply(this, arguments), this.space = document.querySelector("#" + this.id), this.bound = null, this.boundRect = {
            top: 0,
            left: 0,
            width: 0,
            height: 0
        }, this.pixelScale = 1, this.appended = !0, this.space || (this.space = document.createElement("canvas"), this.space.setAttribute("id", this.id), this.appended = !1), this._mdown = !1, this._mdrag = !1, this.bgcolor = e, this.ctx = this.space.getContext(n)
    }
    return extend(i, t), i.prototype.display = function(t, i, e) {
        var n, s;
        if (null == t && (t = "#pt"), null == e && (e = !0), !this.appended) {
            if (this.bound = document.querySelector(t), this.boundRect = this.bound.getBoundingClientRect(), this.pixelScale = 1, e && (n = window.devicePixelRatio || 1, s = this.ctx.webkitBackingStorePixelRatio || this.ctx.mozBackingStorePixelRatio || this.ctx.msBackingStorePixelRatio || this.ctx.oBackingStorePixelRatio || this.ctx.backingStorePixelRatio || 1, this.pixelScale = n / s), !this.bound) throw "Cannot add canvas to element " + t;
            this.resize(this.boundRect.width, this.boundRect.height), this.autoResize(!0), this.space.parentNode !== this.bound && this.bound.appendChild(this.space), this.appended = !0, setTimeout(function() {
                return this.space.dispatchEvent(new Event("ready")), i ? i(this.boundRect.width, this.boundRect.height, this.space) : void 0
            }.bind(this))
        }
        return this
    }, i.prototype._resizeHandler = function(t) {
        return this.boundRect = this.bound.getBoundingClientRect(), this.resize(this.boundRect.width, this.boundRect.height, t)
    }, i.prototype.autoResize = function(t) {
        return null == t && (t = !0), t ? window.addEventListener("resize", this._resizeHandler) : window.removeEventListener("resize", this._resizeHandler), this
    }, i.prototype.resize = function(t, i, e) {
        var n, s, r;
        t = Math.floor(t), i = Math.floor(i), this.size.set(t, i), this.center = new Vector(t / 2, i / 2), this.boundRect.width = t, this.boundRect.height = i, this.space.width = t * this.pixelScale, this.space.height = i * this.pixelScale, this.space.style.width = t + "px", this.space.style.height = i + "px", 1 !== this.pixelScale && this.ctx.scale(this.pixelScale, this.pixelScale), r = this.items;
        for (n in r) s = r[n], null != s.onSpaceResize && s.onSpaceResize(t, i, e);
        return this.render(this.ctx), this
    }, i.prototype.clear = function(t) {
        var i;
        return t && (this.bgcolor = t), i = this.ctx.fillStyle, this.bgcolor ? (this.ctx.fillStyle = this.bgcolor, this.ctx.fillRect(0, 0, this.size.x, this.size.y)) : this.ctx.clearRect(0, 0, this.size.x, this.size.y), this.ctx.fillStyle = i, this
    }, i.prototype.animate = function(t) {
        var i, e, n;
        this.ctx.save(), this._refresh && this.clear(), e = this.items;
        for (i in e) n = e[i], n.animate(t, this._timeDiff, this.ctx);
        return this._timeEnd >= 0 && t > this._timeEnd && cancelAnimationFrame(this._animID), this.ctx.restore(), this
    }, i
}(Space), this.CanvasSpace = CanvasSpace, DOMSpace = function(t) {
    function i(t, e, n) {
        null == t && (t = "pt_space"), null == e && (e = !1), null == n && (n = "html"), this._resizeHandler = bind(this._resizeHandler, this), i.__super__.constructor.apply(this, arguments), this.space = document.querySelector("#" + this.id), this.css = {
            width: "100%",
            height: "100%"
        }, this.bound = null, this.boundRect = {
            top: 0,
            left: 0,
            width: 0,
            height: 0
        }, this.appended = !0, this.space || this._createSpaceElement(), this._mdown = !1, this._mdrag = !1, this.bgcolor = e, this.ctx = {}
    }
    return extend(i, t), i.prototype._createSpaceElement = function() {
        return this.space = document.createElement("div"), this.space.setAttribute("id", this.id), this.appended = !1
    }, i.prototype.setCSS = function(t, i, e) {
        return null == e && (e = !1), this.css[t] = e ? i + "px" : i, this
    }, i.prototype.updateCSS = function() {
        var t, i, e, n;
        i = this.css, e = [];
        for (t in i) n = i[t], e.push(this.space.style[t] = n);
        return e
    }, i.prototype.display = function(t, i) {
        if (null == t && (t = "#pt"), !this.appended) {
            if (this.bound = document.querySelector(t), this.boundRect = this.bound.getBoundingClientRect(), !this.bound) throw "Cannot add canvas to element " + t;
            this.resize(this.boundRect.width, this.boundRect.height), this.autoResize(!0), this.space.parentNode !== this.bound && this.bound.appendChild(this.space), this.appended = !0, setTimeout(function() {
                return this.space.dispatchEvent(new Event("ready")), i ? i(this.boundRect.width, this.boundRect.height, this.space) : void 0
            }.bind(this))
        }
        return this
    }, i.prototype._resizeHandler = function(t) {
        return this.boundRect = this.bound.getBoundingClientRect(), this.resize(this.boundRect.width, this.boundRect.height, t)
    }, i.prototype.autoResize = function(t) {
        return null == t && (t = !0), t ? window.addEventListener("resize", this._resizeHandler) : window.removeEventListener("resize", this._resizeHandler), this
    }, i.prototype.resize = function(t, i, e) {
        var n, s, r;
        this.size.set(t, i), this.center = new Vector(t / 2, i / 2), r = this.items;
        for (n in r) s = r[n], null != s.onSpaceResize && s.onSpaceResize(t, i, e);
        return this
    }, i.prototype.clear = function() {
        return this.space.innerHML = ""
    }, i.prototype.animate = function(t) {
        var i, e, n;
        e = this.items;
        for (i in e) n = e[i], n.animate(t, this._timeDiff, this.ctx);
        return this._timeEnd >= 0 && t > this._timeEnd && cancelAnimationFrame(this._animID), this
    }, i.attr = function(t, i) {
        var e, n, s;
        n = [];
        for (e in i) s = i[e], n.push(t.setAttribute(e, s));
        return n
    }, i.css = function(t) {
        var i, e, n;
        e = "";
        for (i in t) n = t[i], n && (e += i + ": " + n + "; ");
        return e
    }, i
}(Space), this.DOMSpace = DOMSpace, Form = function() {
    function t(t) {
        this.space = t, this.cc = t.ctx, this.cc.fillStyle = "#999", this.cc.strokeStyle = "#666", this.cc.lineWidth = 1, this.cc.font = "11px sans-serif", this.filled = !0, this.stroked = !0, this.fontSize = 11, this.fontFace = "sans-serif"
    }
    return t.context = function(t) {
        var i, e;
        if (e = document.getElementById(t), i = e && e.getContext ? e.getContext("2d") : !1, !i) throw "Cannot initiate canvas 2d context";
        return i
    }, t.line = function(t, i) {
        if (!i.p1) throw i.toString() + " is not a Pair";
        return t.beginPath(), t.moveTo(i.x, i.y), t.lineTo(i.p1.x, i.p1.y), t.stroke()
    }, t.lines = function(i, e) {
        var n, s, r, o;
        for (o = [], n = 0, s = e.length; s > n; n++) r = e[n], o.push(t.line(i, r));
        return o
    }, t.rect = function(t, i, e, n) {
        if (null == e && (e = !0), null == n && (n = !1), !i.p1) throw "" + (i.toString() === !a(Pair));
        return t.beginPath(), t.moveTo(i.x, i.y), t.lineTo(i.x, i.p1.y), t.lineTo(i.p1.x, i.p1.y), t.lineTo(i.p1.x, i.y), t.closePath(), n && t.stroke(), e ? t.fill() : void 0
    }, t.circle = function(t, i, e, n) {
        null == e && (e = !0), null == n && (n = !1), t.beginPath(), t.arc(i.x, i.y, i.radius, 0, Const.two_pi, !1), e && t.fill(), n && t.stroke()
    }, t.arc = function(t, i, e, n, s) {
        return t.beginPath(), t.arc(i.x, i.y, e, n, s), t.stroke()
    }, t.triangle = function(t, i, e, n) {
        null == e && (e = !0), null == n && (n = !1), t.beginPath(), t.moveTo(i.x, i.y), t.lineTo(i.p1.x, i.p1.y), t.lineTo(i.p2.x, i.p2.y), t.closePath(), e && t.fill(), n && t.stroke()
    }, t.point = function(t, i, e, n, s, r) {
        var o, h, u, a;
        return null == e && (e = 2), null == n && (n = !0), null == s && (s = !1), null == r && (r = !1), r ? (t.beginPath(), t.arc(i.x, i.y, e, 0, Const.two_pi, !1)) : (o = i.x - e, u = i.y - e, h = i.x + e, a = i.y + e, t.beginPath(), t.moveTo(o, u), t.lineTo(o, a), t.lineTo(h, a), t.lineTo(h, u), t.closePath()), n && t.fill(), s && t.stroke(), i
    }, t.points = function(i, e, n, s, r, o) {
        var h, u, a, c;
        for (null == n && (n = 2), null == s && (s = !0), null == r && (r = !1), null == o && (o = !1), c = [], h = 0, u = e.length; u > h; h++) a = e[h], c.push(t.point(i, a, n, s, r, o));
        return c
    }, t.polygon = function(t, i, e, n, s) {
        var r, o, h;
        if (null == e && (e = !0), null == n && (n = !0), null == s && (s = !0), !(i.length <= 1)) {
            for (t.beginPath(), t.moveTo(i[0].x, i[0].y), o = r = 1, h = i.length; h > r; o = r += 1) t.lineTo(i[o].x, i[o].y);
            e && t.closePath(), n && t.fill(), s && t.stroke()
        }
    }, t.curve = function(i, e) {
        return t.polygon(i, e, !1, !1, !0)
    }, t.text = function(t, i, e, n) {
        return t.fillText(e, i.x, i.y, n)
    }, t.prototype.fill = function(t) {
        return this.cc.fillStyle = t ? t : "transparent", this.filled = !!t, this
    }, t.prototype.stroke = function(t, i, e) {
        return this.cc.strokeStyle = t ? t : "transparent", this.stroked = !!t, i && (this.cc.lineWidth = i), e && (this.cc.lineJoin = e), this
    }, t.prototype.font = function(t, i) {
        return null == i && (i = this.fontFace), this.fontSize = t, this.cc.font = t + "px " + i, this
    }, t.prototype.draw = function(t) {
        return this.sketch(t)
    }, t.prototype.sketch = function(i) {
        return i.floor(), i instanceof Circle ? t.circle(this.cc, i, this.filled, this.stroked) : i instanceof Rectangle ? t.rect(this.cc, i, this.filled, this.stroked) : i instanceof Triangle ? t.triangle(this.cc, i, this.filled, this.stroked) : i instanceof Line || i instanceof Pair ? t.line(this.cc, i) : i instanceof PointSet ? t.polygon(this.cc, i.points) : (i instanceof Vector || i instanceof Point) && t.point(this.cc, i), this
    }, t.prototype.point = function(i, e, n) {
        return null == e && (e = 2), null == n && (n = !1), t.point(this.cc, i, e, this.filled, this.stroked, n), this
    }, t.prototype.points = function(i, e, n) {
        return null == e && (e = 2), null == n && (n = !1), t.points(this.cc, i, e, this.filled, this.stroked, n), this
    }, t.prototype.line = function(i) {
        return t.line(this.cc, i), this
    }, t.prototype.lines = function(i) {
        return t.lines(this.cc, i), this
    }, t.prototype.rect = function(i) {
        return t.rect(this.cc, i, this.filled, this.stroked), this
    }, t.prototype.circle = function(i) {
        return t.circle(this.cc, i, this.filled, this.stroked), this
    }, t.prototype.arc = function(i, e, n) {
        return t.arc(this.cc, i, i.radius, e, n), this
    }, t.prototype.triangle = function(i) {
        return t.triangle(this.cc, i, this.filled, this.stroked), this
    }, t.prototype.polygon = function(i, e) {
        return t.polygon(this.cc, i, e, this.filled, this.stroked), this
    }, t.prototype.curve = function(i) {
        return t.curve(this.cc, i), this
    }, t.prototype.text = function(t, i, e, n, s) {
        var r;
        return null == e && (e = 1e3), r = new Vector(t), n && r.add(n, 0), s && r.add(0, s), this.cc.fillText(i, r.x, r.y, e), this
    }, t
}(), this.Form = Form, Point = function() {
    function t(i) {
        this.copy(t.get(arguments))
    }
    return t.get = function(t) {
        return t.length > 0 ? "object" == typeof t[0] ? t[0] instanceof Array || t[0].length > 0 ? {
            x: t[0][0] || 0,
            y: t[0][1] || 0,
            z: t[0][2] || 0
        } : {
            x: t[0].x || 0,
            y: t[0].y || 0,
            z: t[0].z || 0
        } : {
            x: t[0] || 0,
            y: t[1] || 0,
            z: t[2] || 0
        } : {
            x: 0,
            y: 0,
            z: 0
        }
    }, t.prototype.quadrant = function(t, i) {
        return null == i && (i = Const.epsilon), t.near(this) ? Const.identical : Math.abs(t.x - this.x) < i ? t.y < this.y ? Const.top : Const.bottom : Math.abs(t.y - this.y) < i ? t.x < this.x ? Const.left : Const.right : t.y < this.y && t.x > this.x ? Const.top_right : t.y < this.y && t.x < this.x ? Const.top_left : t.y > this.y && t.x < this.x ? Const.bottom_left : Const.bottom_right
    }, t.prototype.set = function(i) {
        var e;
        return e = t.get(arguments), this.x = e.x, this.y = e.y, this.z = e.z, this
    }, t.prototype.copy = function(t) {
        return this.x = t.x, this.y = t.y, this.z = t.z, this
    }, t.prototype.clone = function() {
        return new t(this)
    }, t.prototype.toString = function() {
        return "Point " + this.x + ", " + this.y + ", " + this.z
    }, t.prototype.toArray = function() {
        return [this]
    }, t.prototype.get2D = function(t, i) {
        return null == i && (i = !1), t === Const.xy ? new this.__proto__.constructor(this) : t === Const.xz ? new this.__proto__.constructor(this.x, this.z, this.y) : t === Const.yz ? i ? new this.__proto__.constructor(this.z, this.x, this.y) : new this.__proto__.constructor(this.y, this.z, this.x) : new this.__proto__.constructor(this)
    }, t.prototype.min = function(i) {
        var e;
        return e = t.get(arguments), this.x = Math.min(this.x, e.x), this.y = Math.min(this.y, e.y), this.z = Math.min(this.z, e.z), this
    }, t.prototype.$min = function(i) {
        var e;
        return e = t.get(arguments), new this.__proto__.constructor(Math.min(this.x, e.x), Math.min(this.y, e.y), Math.min(this.z, e.z))
    }, t.prototype.max = function(i) {
        var e;
        return e = t.get(arguments), this.x = Math.max(this.x, e.x), this.y = Math.max(this.y, e.y), this.z = Math.max(this.z, e.z), this
    }, t.prototype.$max = function(i) {
        var e;
        return e = t.get(arguments), new this.__proto__.constructor(Math.max(this.x, e.x), Math.max(this.y, e.y), Math.max(this.z, e.z))
    }, t.prototype.equal = function(i) {
        var e;
        return e = t.get(arguments), e.x === this.x && e.y === this.y && e.z === this.z
    }, t.prototype.near = function(i, e) {
        var n;
        return null == e && (e = Const.epsilon), n = t.get(arguments), Math.abs(n.x - this.x) < e && Math.abs(n.y - this.y) < e && Math.abs(n.z - this.z) < e
    }, t.prototype.floor = function() {
        return this.x = Math.floor(this.x), this.y = Math.floor(this.y), this.z = Math.floor(this.z), this
    }, t.prototype.ceil = function() {
        return this.x = Math.ceil(this.x), this.y = Math.ceil(this.y), this.z = Math.ceil(this.z), this
    }, t
}(), this.Point = Point, Vector = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments)
    }
    return extend(i, t), i.prototype._getArgs = function(t) {
        return "number" == typeof t[0] && t.length > 1 ? t : t[0]
    }, i.prototype.add = function(t) {
        var i;
        return "number" == typeof arguments[0] && 1 === arguments.length ? (this.x += arguments[0], this.y += arguments[0], this.z += arguments[0]) : (i = Point.get(arguments), this.x += i.x, this.y += i.y, this.z += i.z), this
    }, i.prototype.$add = function(t) {
        var e;
        return e = this._getArgs(arguments), new i(this).add(e)
    }, i.prototype.subtract = function(t) {
        var i;
        return "number" == typeof arguments[0] && 1 === arguments.length ? (this.x -= arguments[0], this.y -= arguments[0], this.z -= arguments[0]) : (i = Point.get(arguments), this.x -= i.x, this.y -= i.y, this.z -= i.z), this
    }, i.prototype.$subtract = function(t) {
        var e;
        return e = this._getArgs(arguments), new i(this).subtract(e)
    }, i.prototype.multiply = function(t) {
        var i;
        return 1 === arguments.length && ("number" == typeof arguments[0] || "object" == typeof arguments[0] && 1 === arguments[0].length) ? (this.x *= arguments[0], this.y *= arguments[0], this.z *= arguments[0]) : (i = Point.get(arguments), this.x *= i.x, this.y *= i.y, this.z *= i.z), this
    }, i.prototype.$multiply = function(t) {
        var e;
        return e = this._getArgs(arguments), new i(this).multiply(e)
    }, i.prototype.divide = function(t) {
        var i;
        return 1 === arguments.length && ("number" == typeof arguments[0] || "object" == typeof arguments[0] && 1 === arguments[0].length) ? (this.x /= arguments[0], this.y /= arguments[0], this.z /= arguments[0]) : (i = Point.get(arguments), this.x /= i.x, this.y /= i.y, this.z /= i.z), this
    }, i.prototype.$divide = function(t) {
        var e;
        return e = this._getArgs(arguments), new i(this).divide(e)
    }, i.prototype.op = function() {
        var t, i, e, n, s, r;
        for (n = arguments[0], i = 2 <= arguments.length ? slice.call(arguments, 1) : [], r = this.toArray(), t = 0, e = r.length; e > t; t++) s = r[t], s[n].apply(s, i);
        return this
    }, i.prototype.$op = function() {
        var t, i, e, n, s, r, o;
        for (s = arguments[0], i = 2 <= arguments.length ? slice.call(arguments, 1) : [], e = this.clone(), o = e.toArray(), t = 0, n = o.length; n > t; t++) r = o[t], r[s].apply(r, i);
        return e
    }, i.prototype.angle = function(t) {
        var i, e;
        return 0 === arguments.length ? Math.atan2(this.y, this.x) : ("string" == typeof arguments[0] ? (i = arguments[0], e = arguments.length > 1 ? this.$subtract(arguments[1]).multiply(-1) : void 0) : (e = this.$subtract(arguments[0]).multiply(-1), i = !1), e && !i ? Math.atan2(e.y, e.x) : i === Const.xy ? e ? Math.atan2(e.y, e.x) : Math.atan2(this.y, this.x) : i === Const.yz ? e ? Math.atan2(e.z, e.y) : Math.atan2(this.z, this.y) : i === Const.xz ? e ? Math.atan2(e.z, e.x) : Math.atan2(this.z, this.x) : void 0)
    }, i.prototype.angleBetween = function(t, i) {
        return null == i && (i = Const.xy), Util.boundRadian(this.angle(i), !0) - Util.boundRadian(t.angle(i), !0)
    }, i.prototype.magnitude = function(t) {
        var i, e, n, s, r, o;
        return n = {
            x: this.x * this.x,
            y: this.y * this.y,
            z: this.z * this.z
        }, o = arguments.length >= 1 && !arguments[arguments.length - 1], i = o ? function(t) {
            return t
        } : Math.sqrt, 0 === arguments.length ? i(n.x + n.y + n.z) : ("string" == typeof arguments[0] ? (e = arguments[0], r = arguments.length > 1 && arguments[1] ? this.$subtract(arguments[1]) : void 0) : (r = this.$subtract(arguments[0]), e = !1), s = r ? {
            x: r.x * r.x,
            y: r.y * r.y,
            z: r.z * r.z
        } : n, r && !e ? i(s.x + s.y + s.z) : e === Const.xy ? i(s.x + s.y) : e === Const.yz ? i(s.y + s.z) : e === Const.xz ? i(s.x + s.z) : void 0)
    }, i.prototype.distance = function(t, i) {
        return null == i && (i = Const.xy), this.magnitude(i, t)
    }, i.prototype.normalize = function() {
        return this.set(this.$normalize()), this
    }, i.prototype.$normalize = function() {
        var t;
        return t = this.magnitude(), 0 === t ? new i : new i(this.x / t, this.y / t, this.z / t)
    }, i.prototype.abs = function() {
        return this.x = Math.abs(this.x), this.y = Math.abs(this.y), this.z = Math.abs(this.z), this
    }, i.prototype.dot = function(t, i) {
        return null == i && (i = Const.xyz), i === Const.xyz ? this.x * t.x + this.y * t.y + this.z * t.z : i === Const.xy ? this.x * t.x + this.y * t.y : i === Const.yz ? this.y * t.y + this.z * t.z : i === Const.xz ? this.x * t.x + this.z * t.z : this.x * t.x + this.y * t.y + this.z * t.z
    }, i.prototype.projection = function(t, e) {
        var n, s, r, o;
        return null == e && (e = Const.xyz), o = t.magnitude(), n = this.$normalize(), s = new i(t.x / o, t.y / o, t.z / o), r = n.dot(s, e), n.$multiply(o * r)
    }, i.prototype.cross = function(t) {
        return new i(this.y * t.z - this.z * t.y, this.z * t.x - this.x * t.z, this.x * t.y - this.y * t.x)
    }, i.prototype.bisect = function(t, i) {
        return null == i && (i = !1), i ? this.$add(t).divide(2) : this.$normalize().add(t.$normalize()).divide(2)
    }, i.prototype.perpendicular = function(t) {
        switch (null == t && (t = Const.xy), t) {
            case Const.xy:
                return [new i(-this.y, this.x, this.z), new i(this.y, -this.x, this.z)];
            case Const.yz:
                return [new i(this.x, -this.z, this.y), new i(this.x, this.z, -this.y)];
            case Const.xz:
                return [new i(-this.z, this.y, this.x), new i(this.z, -this.y, this.x)];
            default:
                return [new i(-this.y, this.x, this.z), new i(this.y, -this.x, this.z)]
        }
    }, i.prototype.isPerpendicular = function(t, i) {
        return null == i && (i = Const.xyz), 0 === this.dot(t, i)
    }, i.prototype.surfaceNormal = function(t) {
        return this.cross(t).normalize(!0)
    }, i.prototype.moveTo = function(t) {
        var i, e, n, s, r, o;
        for (o = Point.get(arguments), e = this.$subtract(o), r = this.toArray(), i = 0, n = r.length; n > i; i++) s = r[i], s.subtract(e);
        return this
    }, i.prototype.moveBy = function(t) {
        var i, e, n, s, r;
        for (e = Point.get(arguments), r = this.toArray(), i = 0, n = r.length; n > i; i++) s = r[i], s.add(e);
        return this
    }, i.prototype.rotate2D = function(t, i, e) {
        var n, s, r, o, h;
        for (null == e && (e = Const.xy), i || (i = new Point(0, 0, 0)), r = Matrix.rotateAnchor2D(t, i, e), h = this.toArray(), n = 0, s = h.length; s > n; n++) o = h[n], Matrix.transform2D(o, r, e);
        return this
    }, i.prototype.reflect2D = function(t, i) {
        var e, n, s, r, o;
        for (null == i && (i = Const.xy), s = Matrix.reflectAnchor2D(t, i), o = this.toArray(), e = 0, n = o.length; n > e; e++) r = o[e], Matrix.transform2D(r, s, i);
        return this
    }, i.prototype.scale2D = function(t, i, e, n) {
        var s, r, o, h, u;
        for (null == n && (n = Const.xy), e || (e = new Point(0, 0, 0)), o = Matrix.scaleAnchor2D(t, i, e, n), u = this.toArray(), s = 0, r = u.length; r > s; s++) h = u[s], Matrix.transform2D(h, o, n);
        return this
    }, i.prototype.shear2D = function(t, i, e, n) {
        var s, r, o, h, u;
        for (null == n && (n = Const.xy), e || (e = new Point(0, 0, 0)), o = Matrix.shearAnchor2D(t, i, e, n), u = this.toArray(), s = 0, r = u.length; r > s; s++) h = u[s], Matrix.transform2D(h, o, n);
        return this
    }, i.prototype.clone = function() {
        return new i(this)
    }, i.prototype.toString = function() {
        return "Vector " + this.x + ", " + this.y + ", " + this.z
    }, i
}(Point), this.Vector = Vector, Color = function(t) {
    function i(t) {
        i.__super__.constructor.apply(this, arguments), this.alpha = arguments.length >= 4 ? Math.min(1, Math.max(arguments[3], 0)) : 1, this.mode = arguments.length >= 5 ? arguments[4] : "rgb"
    }
    return extend(i, t), i.XYZ = {
        D65: {
            x: 95.047,
            y: 100,
            z: 108.883
        }
    }, i.parseHex = function(t, e) {
        var n, s;
        return null == e && (e = !1), 0 === t.indexOf("#") && (t = t.substr(1)), 3 === t.length && (t = "" + t[0] + t[0] + t[1] + t[1] + t[2] + t[2]), 8 === t.length && (this.alpha = 1 & t.substr(6), t = t.substring(0, 6)), n = parseInt(t, 16), s = [n >> 16, n >> 8 & 255, 255 & n], e ? new i(s[0], s[1], s[2]) : s
    }, i.prototype.setMode = function(t) {
        if (t = t.toLowerCase(), t !== this.mode) {
            switch (this.mode) {
                case "hsl":
                    this.copy(Point.get(i.HSLtoRGB(this.x, this.y, this.z)));
                    break;
                case "hsb":
                    this.copy(Point.get(i.HSBtoRGB(this.x, this.y, this.z)));
                    break;
                case "lab":
                    this.copy(Point.get(i.LABtoRGB(this.x, this.y, this.z)));
                    break;
                case "lch":
                    this.copy(Point.get(i.LCHtoRGB(this.x, this.y, this.z)));
                    break;
                case "xyz":
                    this.copy(Point.get(i.XYZtoRGB(this.x, this.y, this.z)))
            }
            switch (t) {
                case "hsl":
                    this.copy(Point.get(i.RGBtoHSL(this.x, this.y, this.z)));
                    break;
                case "hsb":
                    this.copy(Point.get(i.RGBtoHSB(this.x, this.y, this.z)));
                    break;
                case "lab":
                    this.copy(Point.get(i.RGBtoLAB(this.x, this.y, this.z)));
                    break;
                case "lch":
                    this.copy(Point.get(i.RGBtoLCH(this.x, this.y, this.z)));
                    break;
                case "xyz":
                    this.copy(Point.get(i.RGBtoXYZ(this.x, this.y, this.z)))
            }
        }
        return this.mode = t, this
    }, i.prototype.hex = function() {
        var t, i, e, n;
        return "rgb" === this.mode && this.floor(), i = this.values("rgb" !== this.mode), t = function(t) {
            return t = t.toString(16), t.length < 2 ? "0" + t : t
        }, e = function() {
            var e, s, r;
            for (r = [], e = 0, s = i.length; s > e; e++) n = i[e], r.push(t(n));
            return r
        }(), "#" + e[0] + e[1] + e[2]
    }, i.prototype.rgb = function() {
        var t;
        return "rgb" === this.mode && this.floor(), t = this.values("rgb" !== this.mode), "rgb(" + t[0] + ", " + t[1] + ", " + t[2] + ")"
    }, i.prototype.rgba = function() {
        var t;
        return "rgb" === this.mode && this.floor(), t = this.values("rgb" !== this.mode), "rgba(" + t[0] + ", " + t[1] + ", " + t[2] + ", " + this.alpha + ")"
    }, i.prototype.values = function(t) {
        var e, n;
        if (null == t && (t = !1), e = [this.x, this.y, this.z], t && "rgb" !== this.mode) switch (this.mode) {
            case "hsl":
                e = i.HSLtoRGB(this.x, this.y, this.z);
                break;
            case "hsb":
                e = i.HSBtoRGB(this.x, this.y, this.z);
                break;
            case "lab":
                e = i.LABtoRGB(this.x, this.y, this.z);
                break;
            case "lch":
                e = i.LCHtoRGB(this.x, this.y, this.z);
                break;
            case "xyz":
                e = i.XYZtoRGB(this.x, this.y, this.z)
        }
        return function() {
            var t, i, s;
            for (s = [], t = 0, i = e.length; i > t; t++) n = e[t], s.push(Math.floor(n));
            return s
        }()
    }, i.prototype.clone = function() {
        var t;
        return t = new i(this.x, this.y, this.z, this.alpha), t.mode = this.mode, t
    }, i.RGBtoHSL = function(t, i, e, n, s) {
        var r, o, h, u, a, c;
        if (n || (t /= 255, i /= 255, e /= 255), u = Math.max(t, i, e), a = Math.min(t, i, e), o = (u + a) / 2, c = o, h = o, u === a) o = 0, c = 0;
        else switch (r = u - a, c = h > .5 ? r / (2 - u - a) : r / (u + a), u) {
            case t:
                o = (i - e) / r + (e > i ? 6 : 0);
                break;
            case i:
                o = (e - t) / r + 2;
                break;
            case e:
                o = (t - i) / r + 4;
                break;
            default:
                o = 0
        }
        return s ? [o / 60, c, h] : [60 * o, c, h]
    }, i.HSLtoRGB = function(t, i, e, n, s) {
        var r, o, h, u, a, c;
        return 0 === i ? s ? [1, 1, 1] : [255, 255, 255] : (n || (t /= 360), a = .5 >= e ? e * (1 + i) : e + i - e * i, u = 2 * e - a, h = function(t, i, e) {
            return 0 > e ? e += 1 : e > 1 && (e -= 1), 1 > 6 * e ? t + (i - t) * e * 6 : 1 > 2 * e ? i : 2 > 3 * e ? t + (i - t) * (2 / 3 - e) * 6 : t
        }, c = h(u, a, t + 1 / 3), o = h(u, a, t), r = h(u, a, t - 1 / 3), s ? [c, o, r] : [255 * c, 255 * o, 255 * r])
    }, i.RGBtoHSB = function(t, i, e, n, s) {
        var r, o, h, u, a, c;
        if (n || (t /= 255, i /= 255, e /= 255), h = Math.max(t, i, e), u = Math.min(t, i, e), r = h - u, a = 0 === h ? 0 : r / h, c = h, h === u) o = 0;
        else switch (h) {
            case t:
                o = (i - e) / r + (e > i ? 6 : 0);
                break;
            case i:
                o = (e - t) / r + 2;
                break;
            case e:
                o = (t - i) / r + 4;
                break;
            default:
                o = 0
        }
        return s ? [o / 60, a, c] : [60 * o, a, c]
    }, i.HSBtoRGB = function(t, i, e, n, s) {
        var r, o, h, u, a, c;
        switch (n || (t /= 360), o = Math.floor(6 * t), r = 6 * t - o, h = e * (1 - i), u = e * (1 - r * i), c = e * (1 - (1 - r) * i), o % 6) {
            case 0:
                a = [e, c, h];
                break;
            case 1:
                a = [u, e, h];
                break;
            case 2:
                a = [h, e, c];
                break;
            case 3:
                a = [h, u, e];
                break;
            case 4:
                a = [c, h, e];
                break;
            case 5:
                a = [e, h, u];
                break;
            default:
                a = [0, 0, 0]
        }
        return s ? a : [255 * a[0], 255 * a[1], 255 * a[2]]
    }, i.RGBtoLAB = function(t, e, n, s, r) {
        var o;
        return s && (t *= 255, e *= 255, n *= 255), o = i.RGBtoXYZ(t, e, n), i.XYZtoLAB(o[0], o[1], o[2])
    }, i.LABtoRGB = function(t, e, n, s, r) {
        var o, h;
        return s && (t *= 100, e = 127 * (e - .5), n = 127 * (n - .5)), h = i.LABtoXYZ(t, e, n), o = i.XYZtoRGB(h[0], h[1], h[2]), r ? [o[0] / 255, o[1] / 255, o[2] / 255] : o
    }, i.RGBtoLCH = function(t, e, n, s, r) {
        var o, h;
        return s && (t *= 255, e *= 255, n *= 255), o = i.RGBtoLAB(t, e, n), h = i.LABtoLCH(o[0], o[1], o[2]), r ? [h[0] / 100, h[1] / 100, h[2] / 360] : h
    }, i.LCHtoRGB = function(t, e, n, s, r) {
        var o, h, u;
        return s && (t *= 100, e *= 100, n *= 360), o = i.LCHtoLAB(t, e, n), u = i.LABtoXYZ(o[0], o[1], o[2]), h = i.XYZtoRGB(u[0], u[1], u[2]), r ? [h[0] / 255, h[1] / 255, h[2] / 255] : h
    }, i.XYZtoRGB = function(t, i, e, n, s) {
        var r, o, h, u, a;
        for (n || (t /= 100, i /= 100, e /= 100), a = [3.2404542 * t + -1.5371385 * i + e * -.4985314, t * -.969266 + 1.8760108 * i + .041556 * e, .0556434 * t + i * -.2040259 + 1.0572252 * e], h = r = 0, u = a.length; u > r; h = ++r) o = a[h], a[h] = 0 > o ? 0 : Math.min(1, o > .0031308 ? 1.055 * Math.pow(o, 1 / 2.4) - .055 : 12.92 * o);
        return s ? a : [Math.round(255 * a[0]), Math.round(255 * a[1]), Math.round(255 * a[2])]
    }, i.RGBtoXYZ = function(t, i, e, n, s) {
        return n || (t /= 255, i /= 255, e /= 255), t = t > .04045 ? Math.pow((t + .055) / 1.055, 2.4) : t / 12.92, i = i > .04045 ? Math.pow((i + .055) / 1.055, 2.4) : i / 12.92, e = e > .04045 ? Math.pow((e + .055) / 1.055, 2.4) : e / 12.92, s || (t = 100 * t, i = 100 * i, e = 100 * e), [.4124564 * t + .3575761 * i + .1804375 * e, .2126729 * t + .7151522 * i + .072175 * e, .0193339 * t + .119192 * i + .9503041 * e]
    }, i.XYZtoLAB = function(t, e, n) {
        var s, r;
        return t /= i.XYZ.D65.x, e /= i.XYZ.D65.y, n /= i.XYZ.D65.z, s = function(t) {
            return t > .008856 ? Math.pow(t, 1 / 3) : 7.787 * t + 16 / 116
        }, r = s(e), [116 * r - 16, 500 * (s(t) - r), 200 * (r - s(n))]
    }, i.LABtoXYZ = function(t, e, n) {
        var s, r, o, h, u;
        return h = (t + 16) / 116, r = e / 500 + h, u = h - n / 200, s = function(t) {
            var i;
            return i = Math.pow(t, 3), i > .008856 ? i : (t - 16 / 116) / 7.787
        }, o = [Math.min(i.XYZ.D65.x, i.XYZ.D65.x * s(r)), Math.min(i.XYZ.D65.y, i.XYZ.D65.y * s(h)), Math.min(i.XYZ.D65.y, i.XYZ.D65.z * s(u))]
    }, i.XYZtoLUV = function(t, e, n) {
        var s, r, o, h, u;
        return h = 4 * t / (t + 15 * e + 3 * n), u = 9 * e / (t + 15 * e + 3 * n), e /= 100, e = e > .008856 ? Math.pow(e, 1 / 3) : 7.787 * e + 16 / 116, r = 4 * i.XYZ.D65.x / (i.XYZ.D65.x + 15 * i.XYZ.D65.y + 3 * i.XYZ.D65.z), o = 9 * i.XYZ.D65.y / (i.XYZ.D65.x + 15 * i.XYZ.D65.y + 3 * i.XYZ.D65.z), s = 116 * e - 16, [s, 13 * s * (h - r), 13 * s * (u - o)]
    }, i.LUVtoXYZ = function(t, e, n) {
        var s, r, o, h, u;
        return u = (t + 16) / 116, s = u * u * u, u = s > .008856 ? s : (u - 16 / 116) / 7.787, r = 4 * i.XYZ.D65.x / (i.XYZ.D65.x + 15 * i.XYZ.D65.y + 3 * i.XYZ.D65.z), o = 9 * i.XYZ.D65.y / (i.XYZ.D65.x + 15 * i.XYZ.D65.y + 3 * i.XYZ.D65.z), e = e / (13 * t) + r, n = n / (13 * t) + o, u = 100 * u, h = -9 * u * e / ((e - 4) * n - e * n), [h, u, (9 * u - 15 * n * u - n * h) / (3 * n)]
    }, i.LABtoLCH = function(t, i, e) {
        var n;
        return n = Math.atan2(e, i), n = n > 0 ? 180 * n / Math.PI : 360 - 180 * Math.abs(n) / Math.PI, [t, Math.sqrt(i * i + e * e), n]
    }, i.LCHtoLAB = function(t, i, e) {
        var n;
        return n = Math.PI * e / 180, [t, Math.cos(n) * i, Math.sin(n) * i]
    }, i.LUVtoLCH = function(t, i, e) {
        return LABtoLCH(t, i, e)
    }, i.LCHtoLUV = function(t, i, e) {
        return LCHtoLAB(t, i, e)
    }, i
}(Vector), this.Color = Color, Circle = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments), this.radius = null != arguments[3] ? arguments[3] : 0
    }
    return extend(i, t), i.prototype.setRadius = function(t) {
        return this.radius = t, this
    }, i.prototype.intersectPoint = function(t) {
        var i, e;
        return e = new Vector(Point.get(arguments)), i = e.$subtract(this), i.x * i.x + i.y * i.y < this.radius * this.radius
    }, i.prototype.intersectPath = function(t, i) {
        var e, n, s, r, o, h, u, a, c, p, l, y, f;
        return null == i && (i = !0), !t instanceof Pair ? !1 : (r = t.direction(), u = this.$subtract(t), e = r.dot(r, Const.xy), n = u.dot(r, Const.xy), s = u.dot(u, Const.xy) - this.radius * this.radius, a = n / e, l = s / e, o = a * a - l, 0 > o ? i ? [] : !1 : i ? (h = Math.sqrt(o), y = -a + h, f = -a - h, c = new Point(t.x - r.x * y, t.y - r.y * y), p = new Point(t.x - r.x * f, t.y - r.y * f), 0 === o ? [c] : [c, p]) : !0)
    }, i.prototype.intersectLine = function(t, i) {
        var e, n, s, r, o, h;
        if (null == i && (i = !0), h = this.intersectPath(t), h && h.length > 0) {
            for (o = [], n = t.bounds(), e = 0, s = h.length; s > e; e++)
                if (r = h[e], Rectangle.contain(r, n, n.p1)) {
                    if (!i) return !0;
                    o.push(r)
                }
            return i ? o : o.length > 0
        }
        return i ? [] : !1
    }, i.prototype.intersectLines = function(t, i) {
        return null == i && (i = !0), Line.intersectLines(this, t, i)
    }, i.prototype.intersectCircle = function(t, i) {
        var e, n, s, r, o, h, u, a;
        return null == i && (i = !0), h = t.$subtract(this), o = h.magnitude(!1), r = Math.sqrt(o), n = this.radius * this.radius, s = t.radius * t.radius, r > this.radius + t.radius ? i ? [] : !1 : r < Math.abs(this.radius - t.radius) ? i ? [new Vector(this), new Vector(t)] : !0 : i ? (e = (n - s + o) / (2 * r), u = Math.sqrt(n - e * e), a = h.$multiply(e / r).add(this), [new Vector(a.x + u * h.y / r, a.y - u * h.x / r), new Vector(a.x - u * h.y / r, a.y + u * h.x / r)]) : !0
    }, i.prototype.hasIntersect = function(t, e) {
        var n, s;
        return null == e && (e = !1), t instanceof i ? this.intersectCircle(t, e) : t instanceof Rectangle || t instanceof PointSet || t instanceof Triangle ? this.intersectLines(t.sides(), e) : t instanceof Pair ? (s = this.intersectLine(t), e ? s : s.length > 0) : t instanceof Point ? (n = t.$subtract(this), n.x * n.x + n.y * n.y < this.radius * this.radius) : e ? [] : !1
    }, i.prototype.toString = function() {
        return "Circle of " + this.radius + " radius at center " + this.x + ", " + this.y + ", " + this.z
    }, i
}(Vector), this.Circle = Circle, Particle = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments), this.id = 0, this.life = {
            age: 0,
            maxAge: 0,
            active: !0,
            complete: !1
        }, this.momentum = new Vector, this.velocity = new Vector, this.mass = 2, this.friction = 0, this.frame_ms = 20
    }
    return extend(i, t), i.prototype.play = function(t, i) {
        var e, n, s;
        for (s = 0, n = []; i > 0;) e = Math.min(i, this.frame_ms), this.integrate(s / 1e3, e / 1e3), i -= e, s += e, n.push(this.life.age++);
        return n
    }, i.prototype.integrate = function(t, i) {
        return this.integrateRK4(t, i)
    }, i.prototype.forces = function(t, i) {
        return {
            force: new Vector
        }
    }, i.prototype.impulse = function(t) {
        return this.momentum.add(t), this.velocity = this.momentum.$divide(this.mass)
    }, i.prototype._evaluate = function(t, i, e) {
        var n, s;
        return null == i && (i = 0), null == e && (e = !1), s = 0 !== i && e ? {
            position: this.$add(e.velocity.$multiply(i)),
            momentum: this.momentum.$add(e.force.$multiply(i))
        } : {
            position: new Vector(this),
            momentum: new Vector(this.momentum)
        }, s.velocity = s.momentum.$divide(this.mass), n = this.forces(s, t + i), {
            velocity: s.velocity,
            force: n.force
        }
    }, i.prototype.integrateRK4 = function(t, i) {
        var e, n, s, r, o;
        return e = function(t, i, e, n) {
            var s;
            return s = new Vector((t.x + 2 * (i.x + e.x) + n.x) / 6, (t.y + 2 * (i.y + e.y) + n.y) / 6, (t.z + 2 * (i.z + e.z) + n.z) / 6)
        }, n = this._evaluate(t, 0), s = this._evaluate(t, .5 * i, n), r = this._evaluate(t, .5 * i, s), o = this._evaluate(t, i, r), this.add(e(n.velocity, s.velocity, r.velocity, o.velocity)), this.momentum.add(e(n.force, s.force, r.force, o.force))
    }, i.prototype.integrateEuler = function(t, i) {
        var e;
        return e = this.forces({
            position: new Vector(this),
            momentum: new Vector(this.momentum)
        }, t + i), this.add(this.velocity), this.momentum.add(e.force), this.velocity = this.momentum.$divide(this.mass)
    }, i.prototype.collideLine2d = function(t, i) {
        var e, n, s, r, o, h, u, a, c, p, l, y, f, d, m, g, x, v, z, _;
        if (null == i && (i = !0), o = new Vector(this), r = Math.abs(t.getDistanceFromPoint(o)), n = Math.abs(r) < this.radius, i && (c = this.$add(this.velocity), a = Math.abs(t.getDistanceFromPoint(c)), s = t.intersectLine(new Line(o).to(c)), s && (c = s.$add(this.velocity.$normalize().$multiply(-this.radius / 2)), a = Math.abs(t.getDistanceFromPoint(c)), n = !0)), n) {
            if (g = t.getPerpendicularFromPoint(o), _ = t.$subtract(t.p1), e = !1, !t.withinBounds(g, Const.xy)) {
                if (this.intersectPoint(t) && (e = !0, u = this.$subtract(t)), this.intersectPoint(t.p1) && (e = !0, u = this.$subtract(t.p1)), !e) return !1;
                _ = new Vector(-u.y, u.x)
            }
            h = _.dot(this.velocity), f = _.$multiply(h / _.dot(_)), z = f.$subtract(this.velocity), this.velocity = f.$add(z), this.momentum = this.velocity.$multiply(this.mass), i && !e && (l = new Line(g).to(o), y = t.getPerpendicularFromPoint(c), p = new Line(g).to(y), x = p.direction(), v = (this.radius - r) / (a - r), d = x.$multiply(v).$add(p), m = d.$add(l.direction().$normalize().$multiply(this.radius)), this.set(m.$add(this.velocity.$normalize())))
        }
        return n
    }, i.prototype.collideWithinBounds = function(t) {
        return this.x - this.radius < t.x || this.x + this.radius > t.p1.x ? (this.x - this.radius < t.x ? this.x = t.x + this.radius : this.x + this.radius > t.p1.x && (this.x = t.p1.x - this.radius), this.velocity.x *= -1, this.momentum = this.velocity.$multiply(this.mass), !0) : this.y - this.radius < t.y || this.y + this.radius > t.p1.y ? (this.y - this.radius < t.y ? this.y = t.y + this.radius : this.y + this.radius > t.p1.y && (this.y = t.p1.y - this.radius), this.velocity.y *= -1, this.momentum = this.velocity.$multiply(this.mass), !0) : !1
    }, i.prototype.collideParticle2d = function(t) {
        return this.hasIntersect(t) ? i.collideParticle2d(this, t, !0) : !1
    }, i.collideParticle2d = function(t, i, e, n) {
        var s, r, o, h, u, a, c, p, l, y, f, d, m, g, x, v, z;
        return null == e && (e = !0), null == n && (n = !0), y = t.$subtract(i).normalize(), m = new Vector(-y.y, y.x), h = y.dot(t.velocity), u = m.dot(t.velocity), a = y.dot(i.velocity), c = m.dot(i.velocity), s = (h * (t.mass - i.mass) + 2 * i.mass * a) / (t.mass + i.mass), r = (a * (i.mass - t.mass) + 2 * t.mass * h) / (t.mass + i.mass), g = y.$multiply(s), x = m.$multiply(u), v = y.$multiply(r), z = m.$multiply(c), f = g.$add(x), d = v.$add(z), n && (p = t.magnitude(i), p < t.radius + i.radius && (o = t.$subtract(i).normalize(), l = Math.abs(p - t.radius - i.radius) / 1.98, t.add(o.multiply(l)), i.add(o.multiply(-l)))), e && (t.velocity = f, i.velocity = d, t.momentum = t.velocity.$multiply(t.mass), i.momentum = i.velocity.$multiply(i.mass)), [f, d]
    }, i.force_gravitation = function(t, i, e, n, s) {
        var r, o, h, u;
        return null == s && (s = .0067), u = 30, r = n.$subtract(t.position), h = r.magnitude() / u, o = 0 === h ? 0 : i * s * e.mass * n.mass / (h * h), r.normalize().multiply(o), {
            force: r
        }
    }, i.RK4 = function(t, i, e, n, s) {
        var r, o, h, u, a, c, p, l, y, f, d, m, g;
        return u = t, l = i, r = e(u, l, 0, s), a = t + .5 * l * n, y = i + .5 * r * n, o = e(a, y, n / 2, s), c = t + .5 * y * n, f = i + .5 * o * n, h = e(c, f, n / 2, s), p = t + f * n, d = i + h * n, m = (u + 2 * (a + c) + p) / 6, g = (l + 2 * (y + f) + d) / 6, {
            c: t + m * n,
            d: i + g * n
        }
    }, i
}(Circle), this.Particle = Particle, ParticleSystem = function() {
    function t() {
        this.count = 0, this.particles = [], this.time = 0
    }
    return t.prototype.add = function(t) {
        return t.id = this.count++, this.particles.push(t), this
    }, t.prototype.remove = function(t) {
        return t && t.life && (t.life.complete = !0), this
    }, t.prototype.animate = function(t, i, e) {
        var n, s, r, o, h, u, a, c, p, l;
        for (this.time++, n = [], p = this.particles, o = s = 0, u = p.length; u > s; o = ++s) c = p[o], c.life.complete ? n.push(o) : c.life.active && c.animate(t, i, e);
        if (n.length > 0) {
            for (l = [], r = 0, a = n.length; a > r; r++) h = n[r], l.push(this.particles.splice(h, 1));
            return l
        }
    }, t
}(), this.ParticleSystem = ParticleSystem, Pair = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments), this.p1 = new Vector(this.x, this.y, this.z), 4 === arguments.length ? (this.z = 0, this.p1.set(arguments[2], arguments[3])) : 6 === arguments.length && this.p1.set(arguments[3], arguments[4], arguments[5])
    }
    return extend(i, t), i.prototype.to = function() {
        return this.p1 = new Vector(Point.get(arguments)), this
    }, i.prototype.getAt = function(t) {
        return 1 === t || "p1" === t ? this.p1 : this
    }, i.prototype.$getAt = function(t) {
        return new Vector(this.getAt(t))
    }, i.prototype.relative = function() {
        return this.p1.add(this), this
    }, i.prototype.$relative = function() {
        return this.$add(this.p1)
    }, i.prototype.bounds = function() {
        return new i(this.$min(this.p1)).to(this.$max(this.p1))
    }, i.prototype.withinBounds = function(t, i) {
        var e, n;
        return i ? (e = this.get2D(i), n = this.p1.get2D(i), e.x === n.x ? t.y >= Math.min(e.y, n.y) && t.y <= Math.max(e.y, n.y) : e.y === n.y ? t.x >= Math.min(e.x, n.x) && t.x <= Math.max(e.x, n.x) : t.x >= Math.min(e.x, n.x) && t.y >= Math.min(e.y, n.y) && t.x <= Math.max(e.x, n.x) && t.y <= Math.max(e.y, n.y)) : t.x >= Math.min(this.x, this.p1.x) && t.y >= Math.min(this.y, this.p1.y) && t.z >= Math.min(this.z, this.p1.z) && t.x <= Math.max(this.x, this.p1.x) && t.y <= Math.max(this.y, this.p1.y) && t.z <= Math.max(this.z, this.p1.z)
    }, i.prototype.interpolate = function(t, i) {
        var e;
        return null == i && (i = !1), e = i ? this.$relative() : this.p1, new Vector((1 - t) * this.x + t * e.x, (1 - t) * this.y + t * e.y, (1 - t) * this.z + t * e.z)
    }, i.prototype.midpoint = function() {
        return this.interpolate(.5)
    }, i.prototype.direction = function(t) {
        return t ? this.$subtract(this.p1) : this.p1.$subtract(this)
    }, i.prototype.size = function() {
        return arguments.length > 0 ? (this.p1 = this.$add(Point.get(arguments)), this) : this.p1.$subtract(this).abs()
    }, i.prototype.length = function(t) {
        var i, e, n, s;
        return null == t && (t = !0), s = this.z - this.p1.z, n = this.y - this.p1.y, e = this.x - this.p1.x, i = e * e + n * n + s * s, t ? Math.sqrt(i) : i
    }, i.prototype.collinear = function(t) {
        return (this.p1.x - this.x) * (t.y - this.y) - (t.x - this.x) * (this.p1.y - this.y)
    }, i.prototype.resetBounds = function() {
        var t;
        return t = this.$min(this.p1), this.p1.set(this.$max(this.p1)), this.set(t), this
    }, i.prototype.equal = function(t) {
        return null == t && (t = !1), arguments[0] instanceof i ? i.__super__.equal.call(this, arguments[0]) && this.p1.equal(arguments[0].p1) : i.__super__.equal.apply(this, arguments)
    }, i.prototype.clone = function() {
        var t;
        return t = new i(this), t.to(this.p1.clone()), t
    }, i.prototype.floor = function() {
        return i.__super__.floor.apply(this, arguments), this.p1.floor()
    }, i.prototype.toString = function() {
        return "Pair of vectors from (" + this.x + ", " + this.y + ", " + this.z + ") to (" + this.p1.x + ", " + this.p1.y + ", " + this.p1.z + ")"
    }, i.prototype.toArray = function() {
        return [this, this.p1]
    }, i
}(Vector), this.Pair = Pair, Line = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments)
    }
    return extend(i, t), i.slope = function(t, i, e) {
        var n, s;
        return null == e && (e = Const.xy), n = t.get2D(e), s = i.get2D(e), s.x - n.x === 0 ? !1 : (s.y - n.y) / (s.x - n.x)
    }, i.intercept = function(t, i, e) {
        var n, s, r, o;
        return null == e && (e = Const.xy), r = t.get2D(e), o = i.get2D(e), o.x - r.x === 0 ? !1 : (s = (o.y - r.y) / (o.x - r.x), n = r.y - s * r.x, {
            slope: s,
            yi: n,
            xi: 0 === s ? !1 : -n / s
        })
    }, i.isPerpendicularLine = function(t, e, n) {
        var s, r;
        return null == n && (n = Const.xy), s = i.slope(t, t.p1, n), r = i.slope(e, e.p1, n), s === !1 ? 0 === r : r === !1 ? 0 === s : s * r === -1
    }, i.prototype.slope = function(t) {
        return null == t && (t = Const.xy), i.slope(this, this.p1, t)
    }, i.prototype.intercept = function(t) {
        return null == t && (t = Const.xy), i.intercept(this, this.p1, t)
    }, i.prototype.getPerpendicular = function(t, e, n, s) {
        var r, o, h;
        return null == e && (e = 10), null == n && (n = !1), null == s && (s = Const.xy), o = this.direction().normalize().perpendicular(s), h = n ? o[1] : o[0], r = new i(this.interpolate(t)), r.to(h.multiply(e).add(r)), r
    }, i.prototype.getDistanceFromPoint = function(t) {
        var i, e;
        return e = this.$subtract(this.p1), i = new Vector(-e.y, e.x).normalize(), this.$subtract(t).dot(i)
    }, i.prototype.getPerpendicularFromPoint = function(t, i) {
        var e;
        return null == i && (i = !0), e = this.p1.$subtract(this).projection(t.$subtract(this)), i ? e.add(this) : e
    }, i.prototype.intersectPath = function(t, i) {
        var e, n, s, r, o, h, u;
        return null == i && (i = Const.xy), e = this.intercept(i), n = t.intercept(i), r = this.get2D(i), s = t.get2D(i), e === !1 ? n === !1 ? !1 : (u = -n.slope * (s.x - r.x) + s.y, i === Const.xy ? new Vector(r.x, u) : new Vector(r.x, u).get2D(i, !0)) : n === !1 ? (u = -e.slope * (r.x - s.x) + r.y, new Vector(s.x, u)) : n.slope !== e.slope ? (o = (e.slope * r.x - n.slope * s.x + s.y - r.y) / (e.slope - n.slope), h = e.slope * (o - r.x) + r.y, i === Const.xy ? new Vector(o, h) : new Vector(o, h).get2D(i, !0)) : e.yi === n.yi ? null : !1
    }, i.prototype.intersectLine = function(t, i) {
        var e;
        return null == i && (i = Const.xy), e = this.intersectPath(t, i), e && this.withinBounds(e, i) && t.withinBounds(e, i) ? e : null === e ? null : !1
    }, i.intersectLines = function(t, i, e) {
        var n, s, r, o, h, u, a;
        if (null == e && (e = !0), !t.intersectLine) throw "No intersectLine function found in " + t.toString();
        a = [];
        for (s in i)
            if (h = i[s], r = t.intersectLine(h, e)) {
                if (!e) return !0;
                if (r.length > 0)
                    for (n = 0, o = r.length; o > n; n++) u = r[n], a.push(u)
            }
        return e ? a : !1
    }, i.prototype.intersectGridLine = function(t, i, e) {
        var n, s, r, o;
        if (null == i && (i = !1), null == e && (e = Const.xy), n = this.get2D(e), s = this.p1.get2D(e), r = t.get2D(e), o = t.p1.get2D(e), s.x - n.x === 0) {
            if (o.y - r.y === 0 && Util.within(n.x, r.x, o.x) && (i || Util.within(r.y, n.y, s.y))) return new Vector(n.x, r.y)
        } else {
            if (s.y - n.y !== 0) return !1;
            if (o.x - r.x === 0 && Util.within(n.y, r.y, o.y) && (i || Util.within(r.x, n.x, s.x))) return new Vector(r.x, n.y)
        }
    }, i.prototype.subpoints = function(t) {
        var i, e, n, s;
        for (n = [], s = i = 0, e = t; e >= 0 ? e >= i : i >= e; s = e >= 0 ? ++i : --i) n.push(this.interpolate(s / t));
        return n
    }, i.prototype.clone = function(t) {
        return new i(this).to(this.p1)
    }, i
}(Pair), this.Line = Line, Rectangle = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments), this.center = new Vector
    }
    return extend(i, t), i.contain = function(t, i, e) {
        return t.x >= i.x && t.x <= e.x && t.y >= i.y && t.y <= e.y && t.z >= i.z && t.z <= e.z
    }, i.prototype.toString = function() {
        var t;
        return t = this.size(), "Rectangle x1 " + this.x + ", y1 " + this.y + ", z1 " + this.z + ", x2 " + this.p1.x + ", y2 " + this.p1.y + ", z2 " + this.p1.z + ", width " + t.x + ", height " + t.y
    }, i.prototype.toPointSet = function() {
        var t;
        return t = this.corners(), new PointSet(this).to([t.topRight, t.bottomRight, t.bottomLeft, t.topLeft])
    }, i.prototype.to = function(t) {
        return this.p1 = new Vector(Point.get(arguments)), this.resetBounds(), this.center = this.midpoint(), this
    }, i.prototype.setCenter = function(t) {
        var i;
        return 0 === arguments.length ? void(this.center = this.midpoint()) : (i = this.size().$divide(2), this.center.set(Point.get(arguments)), this.set(this.center.$subtract(i)), this.p1.set(this.center.$add(i)), this)
    }, i.prototype.resizeTo = function() {
        return this.p1 = new Vector(Point.get(arguments)), this.relative(), this.center = this.midpoint(), this
    }, i.prototype.resizeCenterTo = function() {
        var t;
        return t = new Vector(Point.get(arguments)).divide(2), this.set(this.center.$subtract(t)), this.p1.set(this.center.$add(t)), this
    }, i.prototype.enclose = function(t) {
        return this.set(this.$min(t)), this.p1.set(this.p1.$max(t.p1)), this.center = this.midpoint(), this
    }, i.prototype.$enclose = function(t) {
        return this.clone().enclose(t)
    }, i.prototype.isEnclosed = function(t) {
        var i, e;
        return i = this.$subtract(t).multiply(this.p1.$subtract(t.p1)), e = this.size().subtract(t.size()), i.x <= 0 && i.y <= 0 && i.z <= 0 && e.x * e.y >= 0
    }, i.prototype.isLarger = function(t) {
        var i, e;
        return i = this.size(), e = t.size(), i.x * i.y > e.x * e.y
    }, i.prototype.intersectPoint = function() {
        var t;
        return t = Point.get(arguments), t.x >= this.x && t.x <= this.p1.x && t.y >= this.y && t.y <= this.p1.y && t.z >= this.z && t.z <= this.p1.z
    }, i.prototype.intersectPath = function(t, i) {
        var e, n, s, r, o, h;
        for (null == i && (i = !0), h = this.sides(), r = [], e = 0, n = h.length; n > e; e++)
            if (o = h[e], s = o.intersectPath(t), s && this.intersectPoint(s)) {
                if (!i) return !0;
                r.push(s)
            }
        return i ? r : !1
    }, i.prototype.intersectLine = function(t, i) {
        var e, n, s, r, o, h, u, a, c;
        if (null == i && (i = !0), n = this.intersectPoint(t), s = this.intersectPoint(t.p1), n && s && i) return [];
        if (!n && !s && (r = t.bounds(), !this.intersectRectangle(r, !1))) return i ? [] : !1;
        for (c = this.sides(), u = [], e = 0, o = c.length; o > e; e++)
            if (a = c[e], h = t.intersectLine(a)) {
                if (!i) return !0;
                u.push(h)
            }
        return i ? u : !1
    }, i.prototype.intersectLines = function(t, i) {
        return null == i && (i = !0), Line.intersectLines(this, t, i)
    }, i.prototype.intersectRectangle = function(t, i) {
        var e, n, s, r, o, h, u, a, c, p, l, y, f, d;
        if (null == i && (i = !0), y = this.p1.x >= t.x && this.x <= t.p1.x, f = this.p1.y >= t.y && this.y <= t.p1.y, d = this.p1.z >= t.z && this.z <= t.p1.z, s = y && f && d, !i) return s;
        if (this.isEnclosed(t)) return i ? [] : !0;
        if (!s) return [];
        for (p = this.sides(), l = t.sides(), u = [], e = 0, r = p.length; r > e; e++)
            for (a = p[e], n = 0, o = l.length; o > n; n++) c = l[n], h = a.intersectGridLine(c), h && u.push(h);
        return u
    }, i.prototype.hasIntersect = function(t, e) {
        return null == e && (e = !1), t instanceof Circle ? t.intersectLines(this.sides(), e) : t instanceof i ? this.intersectRectangle(t, e) : t instanceof PointSet || t instanceof Triangle ? this.intersectLines(t.sides(), e) : t instanceof Pair ? this.intersectLine(t, e) : t instanceof Point ? i.contain(t, this, this.p1) : e ? [] : !1
    }, i.prototype.corners = function() {
        return {
            topLeft: new Vector(Math.min(this.x, this.p1.x), Math.min(this.y, this.p1.y), Math.max(this.z, this.p1.z)),
            topRight: new Vector(Math.max(this.x, this.p1.x), Math.min(this.y, this.p1.y), Math.min(this.z, this.p1.z)),
            bottomLeft: new Vector(Math.min(this.x, this.p1.x), Math.max(this.y, this.p1.y), Math.max(this.z, this.p1.z)),
            bottomRight: new Vector(Math.max(this.x, this.p1.x), Math.max(this.y, this.p1.y), Math.min(this.z, this.p1.z))
        }
    }, i.prototype.sides = function() {
        var t;
        return t = this.corners(), [new Line(t.topLeft).to(t.topRight), new Line(t.topRight).to(t.bottomRight), new Line(t.bottomRight).to(t.bottomLeft), new Line(t.bottomLeft).to(t.topLeft)]
    }, i.prototype.quadrants = function() {
        var t;
        return t = this.corners(), {
            topLeft: new this.__proto__.constructor(t.topLeft).to(this.center),
            topRight: new this.__proto__.constructor(t.topRight).to(this.center),
            bottomLeft: new this.__proto__.constructor(t.bottomLeft).to(this.center),
            bottomRight: new this.__proto__.constructor(t.bottomRight).to(this.center)
        }
    }, i.prototype.clone = function() {
        var t;
        return t = new i(this).to(this.p1), t.to(this.p1.clone()), t
    }, i
}(Pair), this.Rectangle = Rectangle, Grid = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments), this.cell = {
            type: "fix-fix",
            size: new Vector
        }, this.rows = 0, this.columns = 0, this.layout = [], this.cellCallback = null
    }
    return extend(i, t), i.prototype.toString = function() {
        var t;
        return t = this.size(), "Grid width " + t.x + ", height " + t.y + ", columns " + this.columns + ", rows " + this.rows + ", " + ("cell (" + this.cell.size.x + ", " + this.cell.size.y + "), type " + this.cell.type)
    }, i.prototype.init = function(t, i, e, n) {
        var s;
        return null == e && (e = "fix"), null == n && (n = "fix"), s = this.size(), this.cell.type = e + "-" + n, this.rows = i, this.columns = t, "stretch" === e ? (this.cell.size.x = s.x / t, this.columns = t) : "flex" === e ? (this.columns = Math.round(s.x / t), this.cell.size.x = s.x / this.columns) : (this.cell.size.x = t, this.columns = Math.floor(s.x / this.cell.size.x)), "stretch" === n ? (this.cell.size.y = s.y / i, this.rows = i) : "flex" === n ? (this.rows = Math.round(s.y / i), this.cell.size.y = s.y / this.rows) : (this.cell.size.y = i, this.rows = Math.floor(s.y / this.cell.size.y)), this
    }, i.prototype.generate = function(t) {
        return "function" == typeof t && (this.cellCallback = t), this
    }, i.prototype.create = function() {
        var t, i, e, n, s, r, o, h, u;
        if (!this.cellCallback) return this;
        for (e = t = 0, h = this.columns; h >= 0 ? h > t : t > h; e = h >= 0 ? ++t : --t)
            for (o = i = 0, u = this.rows; u >= 0 ? u > i : i > u; o = u >= 0 ? ++i : --i) n = this.cell.size.clone(), r = this.$add(n.$multiply(e, o)), s = this.layout.length > 0 && this.layout[0].length > 0 ? 1 === this.layout[o][e] : !1, this.cellCallback(n, r, o, e, this.cell.type, s);
        return this
    }, i.prototype.getCellSize = function() {
        return this.cell.size.clone()
    }, i.prototype.cellToRectangle = function(t, i, e) {
        var n;
        return null == e && (e = !1), e || t >= 0 && t < this.columns && i >= 0 && i < this.rows ? n = new Rectangle(this.$add(this.cell.size.$multiply(t, i))).resizeTo(this.cell.size) : !1
    }, i.prototype.positionToCell = function(t) {
        var i, e;
        return e = new Vector(this._getArgs(arguments)), i = e.$subtract(this).$divide(this.cell.size).floor(), i.max(0, 0).min(this.columns - 1, this.rows - 1), i
    }, i.prototype.resetLayout = function(t) {
        var i, e, n, s, r, o;
        for (this.layout = [], s = i = 0, r = this.rows; r >= 0 ? r > i : i > r; s = r >= 0 ? ++i : --i)
            for (this.layout[s] = [], n = e = 0, o = this.columns; o >= 0 ? o > e : e > o; n = o >= 0 ? ++e : --e) this.layout[s][n] = 0, t && t(this, s, n);
        return this
    }, i.prototype.occupy = function(t, i, e, n, s) {
        var r, o, h, u, a, c;
        if (null == s && (s = !0), this.rows <= 0 || this.columns <= 0) return this;
        for (this.layout.length < 1 && this.resetLayout(), h = r = 0, a = e; a >= 0 ? a > r : r > a; h = a >= 0 ? ++r : --r)
            for (u = o = 0, c = n; c >= 0 ? c > o : o > c; u = c >= 0 ? ++o : --o) this.layout[Math.min(this.layout.length - 1, i + u)][t + h] = s ? 1 : 0;
        return this
    }, i.prototype.canFit = function(t, i, e, n) {
        var s, r, o, h, u, a, c, p, l;
        for (u = s = a = i, c = Math.min(this.rows, i + n); c >= a ? c > s : s > c; u = c >= a ? ++s : --s)
            for (h = r = p = t, l = Math.min(this.columns, t + e); l >= p ? l > r : r > l; h = l >= p ? ++r : --r)
                if (o = this.layout[u][h], null != o && o > 0) return !1;
        return !0
    }, i.prototype.fit = function(t, i) {
        var e, n, s, r, o, h, u, a, c, p, l;
        for (h = Math.min(t, this.columns), a = e = 0, p = this.rows; p >= 0 ? p > e : e > p; a = p >= 0 ? ++e : --e)
            for (o = h, c = 0, u = n = 0, l = this.columns; l >= 0 ? l > n : n > l; u = l >= 0 ? ++n : --n)
                if (r = this.layout[a][u], null != r && r > 0) c++, o = h;
                else if (o--, 0 >= o) return this.occupy(c, a, h, i), s = new Rectangle(this.$add(this.cell.size.$multiply(c, a))), s.resizeTo(this.cell.size.$multiply(h, i)), {
            row: a,
            column: c,
            columnSize: h,
            rowSize: i,
            bound: s
        };
        return !1
    }, i.prototype.neighbors = function(t, i) {
        var e, n, s, r, o;
        for (o = [
                [t - 1, i - 1],
                [t, i - 1],
                [t + 1, i - 1],
                [t + 1, i],
                [t + 1, i + 1],
                [t, i + 1],
                [t - 1, i + 1],
                [t - 1, i]
            ], r = [], e = 0, n = o.length; n > e; e++) s = o[e], r.push(s[0] >= 0 && s[0] < this.columns && s[1] >= 0 && s[1] < this.rows ? new Vector(s[0], s[1], this.layout[s[1]][s[0]]) : !1);
        return r
    }, i
}(Rectangle), this.Grid = Grid, PointSet = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments), this.points = []
    }
    return extend(i, t), i.prototype.toString = function() {
        var t, i, e, n, s;
        for (s = "PointSet [ ", n = this.points, t = 0, i = n.length; i > t; t++) e = n[t], s += e.x + "," + e.y + "," + e.z + ", ";
        return s + " ]"
    }, i.prototype.toArray = function() {
        return this.points.slice()
    }, i.prototype.to = function(t) {
        var i, e, n, s;
        if (arguments.length > 0)
            if (Array.isArray(arguments[0]) && arguments[0].length > 0 && "object" == typeof arguments[0][0])
                for (s = arguments[0], i = 0, e = s.length; e > i; i++) n = s[i], this.points.push(new Vector(n));
            else this.points.push(new Vector(Point.get(arguments)));
        return this
    }, i.prototype.getAt = function(t) {
        return this.points[Math.min(this.points.length - 1, Math.max(0, t))]
    }, i.prototype.$getAt = function(t) {
        return new Vector(this.getAt(t))
    }, i.prototype.setAt = function(t, i) {
        return this.points[t] = i, this
    }, i.prototype.count = function() {
        return this.points.length
    }, i.prototype.connectFromAnchor = function(t) {
        var i, e, n, s;
        if (arguments.length > 0)
            if (Array.isArray(arguments[0]) && arguments[0].length > 0)
                for (s = arguments[0], i = 0, e = s.length; e > i; i++) n = s[i], this.points.push(this.$add(n));
            else this.points.push(this.$add(Point.get(arguments)));
        return this
    }, i.prototype.disconnect = function(t) {
        return null == t && (t = -1), this.points = 0 > t ? this.points.slice(0, this.points.length + t) : this.points.slice(t + 1), this
    }, i.prototype.clear = function() {
        return this.points = [], this
    }, i.prototype.sides = function(t) {
        var i, e, n, s, r, o;
        for (null == t && (t = !0), e = null, o = [], r = this.points, i = 0, n = r.length; n > i; i++) s = r[i], e && o.push(new Line(e).to(s)), e = s;
        return this.points.length > 1 && t && o.push(new Line(e).to(this.points[0])), o
    }, i.prototype.angles = function(t) {
        var i, e, n, s, r, o;
        for (null == t && (t = Const.xy), e = [], n = i = 1, s = this.points.length - 1; s > i; n = i += 1) r = this.points[n - 1].$subtract(this.points[n]), o = this.points[n + 1].$subtract(this.points[n]), e.push({
            p0: this.points[n - 1],
            p1: this.points[n],
            p2: this.points[n + 1],
            angle: r.angleBetween(o)
        });
        return e
    }, i.prototype.bounds = function() {
        return Util.boundingBox(this.points)
    }, i.prototype.centroid = function() {
        return Util.centroid(this.points)
    }, i.prototype.convexHull = function(t) {
        var i, e, n, s, r;
        if (null == t && (t = !0), this.points.length < 3) return [];
        for (t ? (r = this.points.slice(), r.sort(function(t, i) {
                return t.x - i.x
            })) : r = this.points, n = function(t, i, e) {
                return (i.x - t.x) * (e.y - t.y) - (e.x - t.x) * (i.y - t.y) > 0
            }, i = [], n(r[0], r[1], r[2]) ? (i.push(r[0]), i.push(r[1])) : (i.push(r[1]), i.push(r[0])), i.unshift(r[2]), i.push(r[2]), e = 3; e < r.length;)
            if (s = r[e], n(s, i[0], i[1]) && n(i[i.length - 2], i[i.length - 1], s)) e++;
            else {
                for (; !n(i[i.length - 2], i[i.length - 1], s);) i.pop();
                for (i.push(s); !n(i[0], i[1], s);) i.shift();
                i.unshift(s), e++
            }
        return i
    }, i.prototype.clone = function() {
        return new i(this).to(Util.clonePoints(this.points))
    }, i
}(Vector), this.PointSet = PointSet, Curve = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments), this.is3D = !1
    }
    return extend(i, t), i.prototype._getSteps = function(t) {
        var i, e, n, s, r;
        for (r = [], n = i = 0, e = t; e >= i; n = i += 1) s = n / t, r.push([s, s * s, s * s * s]);
        return r
    }, i.prototype.controlPoints = function(t, i) {
        var e, n, s, r, o;
        return null == t && (t = 0), null == i && (i = !1), e = function(t) {
            return function(i) {
                var e;
                return e = i < t.points.length - 1 ? i : t.points.length - 1
            }
        }(this), n = this.points[t], null == n.x ? !1 : (t = i ? t : t + 1, s = this.points[e(t++)], r = this.points[e(t++)], o = this.points[e(t++)], {
            p0: n,
            p1: s,
            p2: r,
            p3: o
        })
    }, i.prototype.catmullRom = function(t) {
        var i, e, n, s, r, o, h, u, a;
        if (null == t && (t = 10), this.points.length < 2) return [];
        for (o = [], a = this._getSteps(t), n = this.controlPoints(0, !0), s = i = 0, h = t; h >= i; s = i += 1) o.push(this.catmullRomPoint(a[s], n));
        for (r = 0; r < this.points.length - 2;)
            if (n = this.controlPoints(r)) {
                for (s = e = 0, u = t; u >= e; s = e += 1) o.push(this.catmullRomPoint(a[s], n));
                r++
            }
        return o
    }, i.prototype.catmullRomPoint = function(t, i) {
        var e, n, s, r, o, h, u, a, c, p;
        return o = t[0], h = t[1], u = t[2], e = -.5 * u + h - .5 * o, n = 1.5 * u - 2.5 * h + 1, s = -1.5 * u + 2 * h + .5 * o, r = .5 * u - .5 * h, a = e * i.p0.x + n * i.p1.x + s * i.p2.x + r * i.p3.x, c = e * i.p0.y + n * i.p1.y + s * i.p2.y + r * i.p3.y, p = this.is3D ? e * i.p0.z + n * i.p1.z + s * i.p2.z + r * i.p3.z : 0, new Point(a, c, p)
    }, i.prototype.cardinal = function(t, i) {
        var e, n, s, r, o, h, u, a, c;
        if (null == t && (t = 10), null == i && (i = .5), this.points.length < 2) return [];
        for (h = [], c = this._getSteps(t), s = this.controlPoints(0, !0), r = e = 0, u = t; u >= e; r = e += 1) h.push(this.cardinalPoint(c[r], s, i));
        for (o = 0; o < this.points.length - 2;)
            if (s = this.controlPoints(o)) {
                for (r = n = 0, a = t; a >= n; r = n += 1) h.push(this.cardinalPoint(c[r], s, i));
                o++
            }
        return h
    }, i.prototype.cardinalPoint = function(t, i, e) {
        var n, s, r, o, h, u, a, c, p, l, y, f;
        return null == e && (e = .5), a = t[0], c = t[1], p = t[2], n = e * (-1 * p + 2 * c - a), s = e * (-1 * p + c), r = 2 * p - 3 * c + 1, o = e * (p - 2 * c + a), h = -2 * p + 3 * c, u = e * (p - c), l = i.p0.x * n + i.p1.x * s + r * i.p1.x + i.p2.x * o + h * i.p2.x + i.p3.x * u, y = i.p0.y * n + i.p1.y * s + r * i.p1.y + i.p2.y * o + h * i.p2.y + i.p3.y * u, f = this.is3D ? i.p0.z * n + i.p1.z * s + r * i.p1.z + i.p2.z * o + h * i.p2.z + i.p3.z * u : 0, new Point(l, y, f)
    }, i.prototype.bezier = function(t) {
        var i, e, n, s, r, o, h;
        if (null == t && (t = 10), this.points.length < 4) return [];
        for (r = [], h = this._getSteps(t), s = 0; s <= this.points.length - 3;)
            if (e = this.controlPoints(s)) {
                for (n = i = 0, o = t; o >= i; n = i += 1) r.push(this.bezierPoint(h[n], e));
                s += 3
            }
        return r
    }, i.prototype.bezierPoint = function(t, i) {
        var e, n, s, r, o, h, u, a, c, p;
        return o = t[0], h = t[1], u = t[2], e = -1 * u + 3 * h - 3 * o + 1, n = 3 * u - 6 * h + 3 * o, s = -3 * u + 3 * h, r = u, a = e * i.p0.x + n * i.p1.x + s * i.p2.x + r * i.p3.x, c = e * i.p0.y + n * i.p1.y + s * i.p2.y + r * i.p3.y, p = this.is3D ? e * i.p0.z + n * i.p1.z + s * i.p2.z + r * i.p3.z : 0, new Point(a, c, p)
    }, i.prototype.bspline = function(t, i) {
        var e, n, s, r, o, h, u, a, c;
        if (null == t && (t = 10), null == i && (i = !1), this.points.length < 2) return [];
        for (h = [], c = this._getSteps(t), o = 0; o < this.points.length - 2;)
            if (s = this.controlPoints(o)) {
                if (i)
                    for (r = n = 0, a = t; a >= n; r = n += 1) h.push(this.bsplineTensionPoint(c[r], s, i));
                else
                    for (r = e = 0, u = t; u >= e; r = e += 1) h.push(this.bsplinePoint(c[r], s));
                o++
            }
        return h
    }, i.prototype.bsplinePoint = function(t, i) {
        var e, n, s, r, o, h, u, a, c, p;
        return o = t[0], h = t[1], u = t[2], e = -.16666666666 * u + .5 * h - .5 * o + .16666666666, n = .5 * u - h + .66666666666, s = -.5 * u + .5 * h + .5 * o + .16666666666, r = .16666666666 * u, a = e * i.p0.x + n * i.p1.x + s * i.p2.x + r * i.p3.x, c = e * i.p0.y + n * i.p1.y + s * i.p2.y + r * i.p3.y, p = this.is3D ? e * i.p0.z + n * i.p1.z + s * i.p2.z + r * i.p3.z : 0, new Point(a, c, p)
    }, i.prototype.bsplineTensionPoint = function(t, i, e) {
        var n, s, r, o, h, u, a, c, p, l, y, f;
        return null == e && (e = 1), a = t[0], c = t[1], p = t[2], n = e * (-.16666666666 * p + .5 * c - .5 * a + .16666666666), s = e * (-1.5 * p + 2 * c - .33333333333), r = 2 * p - 3 * c + 1, o = e * (1.5 * p - 2.5 * c + .5 * a + .16666666666), h = -2 * p + 3 * c, u = .16666666666 * e * p, l = n * i.p0.x + s * i.p1.x + r * i.p1.x + o * i.p2.x + h * i.p2.x + u * i.p3.x, y = n * i.p0.y + s * i.p1.y + r * i.p1.y + o * i.p2.y + h * i.p2.y + u * i.p3.y, f = this.is3D ? n * i.p0.z + s * i.p1.z + r * i.p1.y + o * i.p2.z + h * i.p2.z + u * i.p3.z : 0, new Point(l, y, f)
    }, i
}(PointSet), this.Curve = Curve, Triangle = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments), this.p1 = new Vector(this.x - 1, this.y - 1, this.z), this.p2 = new Vector(this.x + 1, this.y + 1, this.z)
    }
    return extend(i, t), i.prototype.to = function(t) {
        return arguments.length > 0 && ("object" == typeof arguments[0] && 2 === arguments.length ? (this.p1.set(arguments[0]), this.p2.set(arguments[1])) : arguments.length < 6 ? (this.p1.set([arguments[0], arguments[1]]), this.p2.set([arguments[2], arguments[3]])) : (this.p1.set([arguments[0], arguments[1], arguments[2]]), this.p2.set([arguments[3], arguments[4], arguments[5]]))), this
    }, i.prototype.toArray = function() {
        return [this, this.p1, this.p2]
    }, i.prototype.toString = function() {
        return "Triangle (" + this.x + ", " + this.y + ", " + this.z + "), (" + this.p1.x + ", " + this.p1.y + ", " + this.p1.z + "), (" + this.p2.x + ", " + this.p2.y + ", " + this.p2.z + ")"
    }, i.prototype.getAt = function(t) {
        return 1 === t || "p1" === t ? this.p1 : 2 === t || "p2" === t ? this.p2 : this
    }, i.prototype.$getAt = function(t) {
        return new Vector(this.getAt(t))
    }, i.prototype.toPointSet = function() {
        var t;
        return t = new Vector(this), new PointSet(t).to([t, this.p1, this.p2])
    }, i.prototype.sides = function() {
        return [new Line(this).to(this.p1), new Line(this.p1).to(this.p2), new Line(this.p2).to(this)]
    }, i.prototype.angles = function(t) {
        var i;
        return null == t && (t = Const.xy), i = [this.p2.$subtract(this).angleBetween(this.p1.$subtract(this), t), this.$subtract(this.p1).angleBetween(this.p2.$subtract(this.p1), t)], i.push(Math.PI - i[0] - i[1]), i
    }, i.prototype.medial = function() {
        var t, e, n;
        return n = this.sides(), t = function() {
            var t, i, s;
            for (s = [], t = 0, i = n.length; i > t; t++) e = n[t], s.push(e.midpoint());
            return s
        }(), new i(t[0]).to(t[1], t[2])
    }, i.prototype.perimeter = function() {
        var t, i;
        return i = this.sides(), t = [i[0].length(), i[1].length(), i[2].length()], {
            sides: i,
            value: t[0] + t[1] + t[2],
            lengths: t
        }
    }, i.prototype.area = function() {
        var t, i;
        return i = this.perimeter(), t = i.value / 2, {
            value: Math.sqrt(t * (t - i.lengths[0]) * (t - i.lengths[1]) * (t - i.lengths[2])),
            perimeter: i
        }
    }, i.prototype.oppositeSide = function(t) {
        return "p1" === t ? new Line(this).to(this.p2) : "p2" === t ? new Line(this).to(this.p1) : new Line(this.p1).to(this.p2)
    }, i.prototype.adjacentSides = function(t) {
        return "p1" === t ? [new Line(this.p1).to(this), new Line(this.p1).to(this.p2)] : "p2" === t ? [new Line(this.p2).to(this), new Line(this.p2).to(this.p1)] : [new Line(this).to(this.p1), new Line(this).to(this.p2)]
    }, i.prototype.bisector = function(t, i, e) {
        var n, s, r;
        return null == i && (i = !1), null == e && (e = 100), n = this.adjacentSides(t), r = new Vector(n[0]), n[0].moveTo(0, 0), n[1].moveTo(0, 0), s = n[0].p1.bisect(n[1].p1), i ? new Line(r).to(s.multiply(e).add(r)) : s
    }, i.prototype.altitude = function(t) {
        return "p1" === t || "p2" === t ? new Line(this[t]).to(this.oppositeSide(t).getPerpendicularFromPoint(this[t])) : new Line(this).to(this.oppositeSide().getPerpendicularFromPoint(this))
    }, i.prototype.centroid = function() {
        var t, i, e;
        return t = this.$divide(3), i = this.p1.$divide(3), e = this.p2.$divide(3), new Vector(t.x + i.x + e.x, t.y + i.y + e.y, t.z + i.z + e.z)
    }, i.prototype.orthocenter = function() {
        var t, i;
        return t = this.altitude(), i = this.altitude("p1"), t.intersectPath(i, Const.xyz)
    }, i.prototype.incenter = function() {
        var t, i;
        return t = this.bisector("p0", !0), i = this.bisector("p1", !0), t.intersectPath(i, Const.xyz);

    }, i.prototype.incircle = function() {
        var t, i, e;
        return i = this.incenter(), t = this.area(), e = 2 * t.value / t.perimeter.value, new Circle(i).setRadius(e)
    }, i.prototype.circumcenter = function() {
        var t, i;
        return t = this.medial(), i = [new Line(t).to(this.$subtract(t).perpendicular()[0].$add(t)), new Line(t.p1).to(this.p1.$subtract(t.p1).perpendicular()[0].$add(t.p1)), new Line(t.p2).to(this.p2.$subtract(t.p2).perpendicular()[0].$add(t.p2))], {
            center: i[0].intersectPath(i[1], Const.xyz),
            bisectors: i
        }
    }, i.prototype.circumcircle = function() {
        var t, i;
        return t = this.circumcenter(), i = this.magnitude(t.center), new Circle(t.center).setRadius(i)
    }, i.prototype.intersectPoint = function(t) {
        var i, e, n;
        return n = this.sides(), i = function() {
            var i, s, r;
            for (r = [], i = 0, s = n.length; s > i; i++) e = n[i], r.push(e.collinear(t) > 0);
            return r
        }(), i[0] === i[1] && i[1] === i[2]
    }, i.prototype.intersectPath = function(t, i, e) {
        var n, s, r, o, h, u;
        for (null == i && (i = !0), null == e && (e = Const.xy), u = this.sides(), o = [], n = 0, s = u.length; s > n; n++)
            if (h = u[n], r = h.intersectPath(t), r && h.withinBounds(r, e)) {
                if (!i) return !0;
                o.push(r)
            }
        return i ? o : !1
    }, i.prototype.intersectLine = function(t, i, e) {
        var n, s, r, o, h;
        for (null == i && (i = !0), null == e && (e = Const.xy), s = this.intersectPath(t, !0, e), h = [], n = 0, r = s.length; r > n; n++)
            if (o = s[n], t.withinBounds(o)) {
                if (!i) return !0;
                h.push(o)
            }
        return i ? h : !1
    }, i.prototype.intersectLines = function(t, i) {
        return null == i && (i = !0), Line.intersectLines(this, t, i)
    }, i.prototype.intersectPath3D = function(t, i) {
        var e, n, s, r, o, h, u, a, c, p, l;
        return s = this.p1.$subtract(this), r = this.p2.$subtract(this), n = t.direction().normalize(), h = n.cross(r), e = s.dot(h), e > -Const.epsilon && e < Const.epsilon ? !1 : (o = 1 / e, c = t.$subtract(this), p = c.dot(h) * o, 0 > p || p > 1 ? !1 : (u = c.cross(s), l = n.dot(u) * o, 0 > l || l > 1 ? !1 : (a = r.dot(u) * o, a > Const.epsilon ? i ? [p, l, a] : !0 : !1)))
    }, i.prototype.intersectRectangle = function(t, i) {
        return null == i && (i = !0), t.intersectLines(this.sides(), i)
    }, i.prototype.intersectCircle = function(t, i) {
        return null == i && (i = !0), t.intersectLines(this.sides(), i)
    }, i.prototype.intersectTriangle = function(t, i) {
        return null == i && (i = !0), t.intersectLines(this.sides(), i)
    }, i.prototype.clone = function() {
        return new i(this).to(this.p1, this.p2)
    }, i
}(Vector), this.Triangle = Triangle, SVGForm = function() {
    function t(t) {
        this.cc = t.ctx || {}, this.cc.group = this.cc.group || null, this.cc.groupID = "ptx", this.cc.groupCount = 0, this.cc.currentID = "ptx0", this.cc.style = {
            fill: "#999",
            stroke: "#666",
            "stroke-width": 1,
            "stroke-linejoin": !1,
            "stroke-linecap": !1
        }, this.cc.font = "11px sans-serif", this.cc.fontSize = 11, this.cc.fontFace = "sans-serif"
    }
    return t._domId = 0, t.prototype.fill = function(t) {
        return this.cc.style.fill = t ? t : !1, this
    }, t.prototype.stroke = function(t, i, e, n) {
        return this.cc.style.stroke = t ? t : !1, i && (this.cc.style["stroke-width"] = i), e && (this.cc.style["stroke-linejoin"] = e), n && (this.cc.style["stroke-linecap"] = e), this
    }, t.prototype.scope = function(t, i) {
        return null == i && (i = !1), i && (this.cc.group = i), this.cc.groupID = t, this.cc.groupCount = 0, this.nextID(), this.cc
    }, t.prototype.getScope = function(i) {
        if (!i || null === i.animateID) throw "getScope()'s item must be added to a Space, and has an animateID property. Otherwise, use scope() instead.";
        return this.scope(t._scopeID(i))
    }, t.prototype.nextID = function() {
        return this.cc.groupCount++, this.cc.currentID = this.cc.groupID + "-" + this.cc.groupCount, this.cc.currentID
    }, t.id = function(i) {
        return i.currentID || "p-" + t._domId++
    }, t._scopeID = function(t) {
        return "item" + t.animateID
    }, t.style = function(t, i) {
        var e, n, s;
        n = [];
        for (e in i) s = i[e], s ? n.push(e + ":" + s) : "fill" === e ? n.push("fill: none") : "stroke" === e && n.push("stroke: none");
        return DOMSpace.attr(t, {
            style: n.join(";")
        })
    }, t.point = function(i, e, n, s, r, o) {
        var h;
        return null == n && (n = 2), null == s && (s = !0), null == r && (r = !0), null == o && (o = !1), (h = SVGSpace.svgElement(i.group, o ? "circle" : "rect", t.id(i))) ? (o ? DOMSpace.attr(h, {
            cx: e.x,
            cy: e.y,
            r: n
        }) : DOMSpace.attr(h, {
            x: e.x - n,
            y: e.y - n,
            width: n + n,
            height: n + n
        }), t.style(h, i.style), h) : void 0
    }, t.prototype.point = function(i, e, n) {
        return null == e && (e = 2), null == n && (n = !1), this.nextID(), t.point(this.cc, i, e, !0, !0, n), this
    }, t.points = function(i, e, n, s, r, o) {
        var h;
        return null == n && (n = 2), null == s && (s = !0), null == r && (r = !0), null == o && (o = !1),
            function() {
                var u, a, c;
                for (c = [], u = 0, a = e.length; a > u; u++) h = e[u], c.push(t.point(i, h, n, s, r, o));
                return c
            }()
    }, t.prototype.points = function(t, i, e) {
        var n, s, r;
        for (null == i && (i = 2), null == e && (e = !1), n = 0, s = t.length; s > n; n++) r = t[n], this.point(r, i, e);
        return this
    }, t.line = function(i, e) {
        var n;
        if (!e.p1) throw e.toString() + " is not a Pair";
        return n = SVGSpace.svgElement(i.group, "line", t.id(i)), DOMSpace.attr(n, {
            x1: e.x,
            y1: e.y,
            x2: e.p1.x,
            y2: e.p1.y
        }), t.style(n, i.style), n
    }, t.prototype.line = function(i) {
        return this.nextID(), t.line(this.cc, i), this
    }, t.lines = function(i, e) {
        var n;
        return function() {
            var s, r, o;
            for (o = [], s = 0, r = e.length; r > s; s++) n = e[s], o.push(t.line(i, n));
            return o
        }()
    }, t.prototype.lines = function(t) {
        var i, e, n;
        for (i = 0, e = t.length; e > i; i++) n = t[i], this.line(n);
        return this
    }, t.rect = function(i, e, n, s) {
        var r, o;
        if (null == n && (n = !0), null == s && (s = !0), !e.p1) throw "" + (e.toString() === !a(Pair));
        return r = SVGSpace.svgElement(i.group, "rect", t.id(i)), o = e.size(), DOMSpace.attr(r, {
            x: e.x,
            y: e.y,
            width: o.x,
            height: o.y
        }), t.style(r, i.style), r
    }, t.prototype.rect = function(i, e) {
        var n;
        return null == e && (e = !0), this.nextID(), n = e ? i.bounds() : i, t.rect(this.cc, n), this
    }, t.circle = function(i, e, n, s) {
        var r;
        return null == n && (n = !0), null == s && (s = !1), (r = SVGSpace.svgElement(i.group, "circle", t.id(i))) ? (DOMSpace.attr(r, {
            cx: e.x,
            cy: e.y,
            r: e.radius
        }), t.style(r, i.style), r) : void 0
    }, t.prototype.circle = function(i) {
        return this.nextID(), t.circle(this.cc, i), this
    }, t.polygon = function(i, e, n, s, r) {
        var o, h, u;
        return null == n && (n = !0), null == s && (s = !0), null == r && (r = !0), o = SVGSpace.svgElement(i.group, n ? "polygon" : "polyline", t.id(i)), !o || e.length <= 1 ? void 0 : (u = function() {
            var t, i, n;
            for (n = [], h = t = 0, i = e.length; i > t; h = t += 1) n.push(e[h].x + "," + e[h].y);
            return n
        }(), DOMSpace.attr(o, {
            points: u.join(" ")
        }), t.style(o, i.style), o)
    }, t.prototype.polygon = function(i, e) {
        return this.nextID(), t.polygon(this.cc, i, e), this
    }, t.triangle = function(i, e, n, s) {
        return null == n && (n = !0), null == s && (s = !1), t.polygon(i, e.toArray())
    }, t.prototype.triangle = function(i) {
        return this.nextID(), t.triangle(this.cc, i), this
    }, t.curve = function(i, e, n) {
        return null == n && (n = !1), t.polygon(i, e, n)
    }, t.prototype.curve = function(i, e) {
        return null == e && (e = !1), this.nextID(), t.curve(this.cc, i, e), this
    }, t.text = function(i, e, n, s, r, o) {
        var h;
        return null == s && (s = 0), null == r && (r = 0), null == o && (o = 0), (h = SVGSpace.svgElement(i.group, "text", t.id(i))) ? (DOMSpace.attr(h, {
            "pointer-events": "none",
            x: e.x,
            y: e.y,
            dx: 0,
            dy: 0
        }), h.textContent = n, t.style(h, {
            fill: i.style.fill,
            stroke: i.style.stroke,
            "font-family": i.fontFace || !1,
            "font-size": i.fontSize || !1
        }), h) : void 0
    }, t.prototype.text = function(i, e, n, s, r) {
        return null == n && (n = 1e3), this.nextID(), t.text(this.cc, i, e, n, s, r), this
    }, t.prototype.font = function(t, i) {
        return null == i && (i = !1), this.cc.fontFace = i, this.cc.fontSize = t, this.cc.font = t + "px " + i, this
    }, t.prototype.draw = function(t) {
        return this.sketch(t)
    }, t.prototype.sketch = function(i) {
        return i.floor(), i instanceof Circle ? t.circle(this.cc, i, this.filled, this.stroked) : i instanceof Rectangle ? t.rect(this.cc, i, this.filled, this.stroked) : i instanceof Triangle ? t.triangle(this.cc, i, this.filled, this.stroked) : i instanceof Line || i instanceof Pair ? t.line(this.cc, i) : i instanceof PointSet ? t.polygon(this.cc, i.points) : (i instanceof Vector || i instanceof Point) && t.point(this.cc, i), this
    }, t
}(), this.SVGForm = SVGForm, SVGSpace = function(t) {
    function i(t, e, n) {
        null == t && (t = "pt_space"), null == e && (e = !1), null == n && (n = "svg"), i.__super__.constructor.apply(this, arguments), this.bg = document.createElementNS("http://www.w3.org/2000/svg", "rect"), this.bg.setAttribute("id", t + "_bg"), this.bg.setAttribute("fill", e), this.space.appendChild(this.bg)
    }
    return extend(i, t), i.prototype._createSpaceElement = function() {
        return this.space = document.createElementNS("http://www.w3.org/2000/svg", "svg"), this.space.setAttribute("id", this.id), this.appended = !1
    }, i.svgElement = function(t, i, e) {
        var n;
        if (!t || !t.appendChild) throw "parent parameter needs to be a DOM node";
        return n = document.querySelector("#" + e), n || (n = document.createElementNS("http://www.w3.org/2000/svg", i), n.setAttribute("id", e), n.setAttribute("class", e.substring(0, e.indexOf("-"))), t.appendChild(n)), n
    }, i.prototype.resize = function(t, i, e) {
        var n, s, r;
        this.size.set(t, i), this.center = new Vector(t / 2, i / 2), this.space.setAttribute("width", t), this.space.setAttribute("height", i), this.bg.setAttribute("width", t), this.bg.setAttribute("height", i), r = this.items;
        for (n in r) s = r[n], null != s.onSpaceResize && s.onSpaceResize(t, i, e);
        return this
    }, i.prototype.remove = function(t) {
        var i, e, n, s;
        for (s = this.space.querySelectorAll("." + SVGForm._scopeID(t)), i = 0, e = s.length; e > i; i++) n = s[i], n.parentNode.removeChild(n);
        return delete this.items[t.animateID], this
    }, i.prototype.removeAll = function() {
        for (; this.space.firstChild;) return this.space.removeChild(this.space.firstChild), this
    }, i
}(DOMSpace), this.SVGSpace = SVGSpace, Easing = function() {
    function t() {}
    return t.linear = function(t, i, e, n) {
        return e * (t /= n) + i
    }, t._linear = function(i) {
        return t.linear(i, 0, 1, 1)
    }, t.quadIn = function(t, i, e, n) {
        return e * (t /= n) * t + i
    }, t._quadIn = function(i) {
        return t.quadIn(i, 0, 1, 1)
    }, t.quadOut = function(t, i, e, n) {
        return -e * (t /= n) * (t - 2) + i
    }, t._quadOut = function(i) {
        return t.quadOut(i, 0, 1, 1)
    }, t.cubicIn = function(t, i, e, n) {
        return t /= n, e * t * t * t + i
    }, t._cubicIn = function(i) {
        return t.cubicIn(i, 0, 1, 1)
    }, t.cubicOut = function(t, i, e, n) {
        return t /= n, e * ((t - 1) * t * t + 1) + i
    }, t._cubicOut = function(i) {
        return t.cubicOut(i, 0, 1, 1)
    }, t.elastic = function(t, i, e, n, s) {
        var r, o, h;
        return null == s && (s = .3), h = 1.70158, o = n * s, r = e, 0 === t ? i : (t /= n, 1 === t ? i + e : (r < Math.abs(e) ? (r = e, h = o / 4) : h = 0 !== r ? o / Const.two_pi * Math.asin(e / r) : 0, r * Math.pow(2, -10 * t) * Math.sin((t * n - h) * Const.two_pi / o) + e + i))
    }, t._elastic = function(i) {
        return t.elastic(i, 0, 1, 1)
    }, t.bounce = function(t, i, e, n) {
        return (t /= n) < 1 / 2.75 ? 7.5625 * e * t * t + i : 2 / 2.75 > t ? e * (7.5625 * (t -= 1.5 / 2.75) * t + .75) + i : 2.5 / 2.75 > t ? e * (7.5625 * (t -= 2.25 / 2.75) * t + .9375) + i : e * (7.5625 * (t -= 2.625 / 2.75) * t + .984375) + i
    }, t._bounce = function(i) {
        return t.bounce(i, 0, 1, 1)
    }, t
}(), this.Easing = Easing, GridCascade = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments), this.startRow = 0
    }
    return extend(i, t), i.prototype.resetLayout = function() {
        return this.layout = [], this.startRow = 0
    }, i.prototype.occupy = function(t, i, e, n) {
        var s, r, o, h, u, a, c, p;
        for (o = s = u = t, a = e + t; a >= u ? a > s : s > a; o = a >= u ? ++s : --s)
            for (h = r = c = i, p = n + i; p >= c ? p > r : r > p; h = p >= c ? ++r : --r) null == this.layout[h] && (this.layout[h] = []), this.layout[h][o] = 1;
        return this
    }, i.prototype.findStartRow = function() {
        var t, i, e, n, s, r, o, h;
        for (n = this.startRow, s = t = r = this.startRow, o = this.rows; o >= r ? o > t : t > o; s = o >= r ? ++t : --t)
            for (n = s, e = i = 0, h = this.columns; h >= 0 ? h > i : i > h; e = h >= 0 ? ++i : --i)
                if (null != this.layout[s] && (null == this.layout[s][e] || this.layout[s][e] <= 0)) return n;
        return n
    }, i.prototype.fit = function(t, i) {
        var e, n, s, r, o, h, u, a, c, p, l, y, f, d, m, g, x;
        for (a = Math.min(t, this.columns), p = e = f = this.startRow, d = this.rows; d >= f ? d > e : e > d; p = d >= f ? ++e : --e)
            for (u = a, l = 0, p + i >= this.rows && (this.rows += i), null == this.layout[p] && (this.layout[p] = []), c = n = 0, m = this.columns; m >= 0 ? m > n : n > m; c = m >= 0 ? ++n : --n)
                if (h = this.layout[p][c], null != h && h > 0) l = c + 1, u = a;
                else if (u--, 0 === u) {
            if (r = !0, i > 1)
                for (y = s = g = p, x = p + i; x >= g ? x > s : s > x; y = x >= g ? ++s : --s)
                    if (y <= this.rows && null != this.layout[y] && this.layout[y][l] > 0) {
                        r = !1;
                        break
                    }
            if (r) return this.occupy(l, p, a, i), p > this.startRow && (this.startRow = this.findStartRow()), o = new Rectangle(this.$add(this.cell.size.$multiply(l, p))), o.resizeTo(this.cell.size.$multiply(a, i)), {
                row: p,
                column: l,
                columnSize: a,
                rowSize: i,
                bound: o
            }
        }
        return console.error("cannot fit " + p + " " + l + " " + t + " " + i), !1
    }, i
}(Grid), this.GridCascade = GridCascade, ParticleEmitter = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments), this.system = null, this.lastTime = 0, this.period = 0, this.animateID = -1
    }
    return extend(i, t), i.prototype.init = function(t) {
        return this.system = t
    }, i.prototype.frequency = function(t) {
        return this.period = 1e3 / t, this
    }, i.prototype.emit = function() {}, i.prototype.animate = function(t, i, e) {
        return t - this.lastTime > this.period ? (this.emit(), this.lastTime = t) : void 0
    }, i
}(Vector), this.ParticleEmitter = ParticleEmitter, ParticleField = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments), this.system = void 0
    }
    return extend(i, t), i.prototype.check = function(t, i) {
        var e, n, s, r;
        for (null == i && (i = !1), r = [], e = 0, n = t.length; n > e; e++) s = t[e], this.hasIntersect(s) ? this.work(s) : r.push(s);
        return i ? r : t
    }, i.prototype.work = function(t) {}, i
}(Rectangle), this.ParticleField = ParticleField, QuadTree = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments), this.quads = !1, this.items = [], this.depth = 0, this.max_depth = 6, this.max_items = 2
    }
    return extend(i, t), i.prototype.getQuads = function(t, i) {
        var e, n, s;
        if (null == i && (i = []), this.intersectPoint(t) && (i.push(this), this.quads)) {
            s = this.quads;
            for (e in s) n = s[e], n.intersectPoint(t) && n.getQuads(t, i)
        }
        return i
    }, i.prototype.getItems = function(t) {
        var i, e, n;
        if (this.intersectPoint(t)) {
            if (!this.quads) return this.items;
            if (this.quads) {
                n = this.quads;
                for (i in n)
                    if (e = n[i], e.intersectPoint(t)) return e.getItems(t)
            }
        }
        return []
    }, i.prototype.addToQuad = function(t) {
        var i, e, n, s;
        if (!t) return -1;
        if (this.quads) {
            s = this.quads;
            for (e in s)
                if (n = s[e], i = n.addToQuad(t), i > 0) return i;
            return -1
        }
        return !this.quads && this.intersectPoint(t) ? this.items.length >= this.max_items ? this.depth < this.max_depth ? (this.splitQuad(), this.addToQuad(t)) : -1 : (this.items.push(t), this.depth) : -1
    }, i.prototype.splitQuad = function() {
        var t, i, e, n, s, r, o, h, u, a, c, p, l, y;
        this.quads = this.quadrants(), a = this.quads;
        for (r in a) u = a[r], u.depth = this.depth + 1;
        for (c = this.items, n = i = 0, o = c.length; o > i; n = ++i) s = c[n], t = this.addToQuad(s), t > this.depth && (this.items[n] = null);
        for (p = this.items, l = [], e = 0, h = p.length; h > e; e++) y = p[e], l.push(y ? void 0 : this.items.splice(y, 1));
        return l
    }, i.prototype.resetQuad = function() {
        var t, i, e;
        if (this.items = [], this.quads) {
            e = this.quads;
            for (t in e) i = e[t], i.resetQuad();
            return this.quads = !1
        }
    }, i
}(Rectangle), this.QuadTree = QuadTree, SamplePoints = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments), this.bestcandidate = null, this.poisson = null, this.bound = null, this.boundsize = null
    }
    return extend(i, t), i.prototype.setBounds = function(t, i) {
        return null == i && (i = !1), i && this.set(t), this.bound = new Rectangle(this).size(t.size()), this
    }, i.prototype.bestCandidateSampler = function() {
        return this.points = [], this.bound || (this.bound = (new Rectangle).size(500, 500)), this.boundsize = this.bound.size(), this.bestcandidate = {
            halfsize: this.boundsize.$divide(2),
            quartersize: this.boundsize.$divide(4),
            maxDist: this.boundsize.x * this.boundsize.x + this.boundsize.y * this.boundsize.y
        }, this
    }, i.prototype.poissonSampler = function(t) {
        var i;
        return this.points = [], this.bound || (this.bound = (new Rectangle).size(500, 500)), this.boundsize = this.bound.size(), i = t * Math.SQRT1_2, this.poisson = {
            grid: [],
            gridWidth: Math.ceil(this.boundsize.x / i),
            gridHeight: Math.ceil(this.boundsize.y / i),
            cellSize: i,
            radius: t,
            radius2: t * t,
            R: 3 * t * t,
            queue: [],
            queueSize: 0,
            sampleSize: 0,
            sincos: Util.sinCosTable()
        }, this
    }, i.prototype.sample = function(t, i) {
        var e, n, s, r, o, h, u, a, c, p, l, y, f, d, m;
        if (null == t && (t = 10), null == i && (i = !1), this.poisson && "poisson" === i) {
            if (this.poisson.sampleSize > 0 && 0 === this.poisson.queueSize) return !1;
            if (!this.poisson.sampleSize) return this._poissonSample(this.bound.x + this.boundsize.x / 2, this.bound.y + this.boundsize.y / 2);
            for (; this.poisson.queueSize;) {
                for (h = Math.floor(Math.random() * this.poisson.queueSize), f = this.poisson.queue[h], u = n = 0, l = t; l > n; u = n += 1)
                    if (e = Math.floor(360 * Math.random()), p = Math.sqrt(Math.random() * this.poisson.R + this.poisson.radius2), d = f.x + p * this.poisson.sincos.cos[e], m = f.y + p * this.poisson.sincos.sin[e], d >= this.bound.x && d < this.boundsize.x && m >= this.bound.y && m < this.boundsize.y && this._poissonCheck(d, m)) return this._poissonSample(d, m);
                this.poisson.queue[h] = this.poisson.queue[--this.poisson.queueSize], this.poisson.queue.length = this.poisson.queueSize
            }
            return !0
        }
        if (this.bestcandidate) {
            for (r = null, o = -1, h = s = 0, y = t; y > s; h = s += 1) {
                if (c = new Vector(this.bound.x + this.boundsize.x * Math.random(), this.bound.y + this.boundsize.y * Math.random()), 0 === this.points.length) {
                    r = c;
                    break
                }
                a = this._bestCandidateCheck(c), a > o && (r = c, o = a)
            }
            return r && this.points.push(r), r
        }
    }, i.prototype._bestCandidateCheck = function(t) {
        var i, e, n, s, r, o, h, u, a, c;
        for (i = this.bestcandidate.maxDist, o = new Rectangle(t.x - this.bestcandidate.quartersize.x, t.y - this.bestcandidate.quartersize.y).size(this.bestcandidate.halfsize.x, this.bestcandidate.halfsize.y), a = function() {
                var t, i, e, n;
                for (e = this.points, n = [], t = 0, i = e.length; i > t; t++) h = e[t], o.intersectPoint(h) && n.push(h);
                return n
            }.call(this), e = 0, u = a.length; u > e; e++) c = a[e], s = c.x - t.x, r = c.y - t.y, n = s * s + r * r, i > n && (i = n);
        return i
    }, i.prototype._poissonSample = function(t, i) {
        var e;
        return e = new Point(t, i), this.poisson.queue.push(e), this.poisson.grid[this.poisson.gridWidth * (i / this.poisson.cellSize | 0) + (t / this.poisson.cellSize | 0)] = e, this.poisson.sampleSize++, this.poisson.queueSize++, e
    }, i.prototype._poissonCheck = function(t, i) {
        var e, n, s, r, o, h, u, a, c, p, l, y, f, d, m, g;
        for (o = Math.floor(t / this.poisson.cellSize), a = Math.floor(i / this.poisson.cellSize), h = Math.max(o - 2, 0), c = Math.max(a - 2, 0), u = Math.min(o + 3, this.poisson.gridWidth), p = Math.min(a + 3, this.poisson.gridHeight), a = e = y = c, f = p; f > e; a = e += 1)
            for (l = a * this.poisson.gridWidth, o = n = d = h, m = u; m > n; o = n += 1)
                if (g = this.poisson.grid[l + o], g && (s = g.x - t, r = g.y - i, s * s + r * r < this.poisson.radius2)) return !1;
        return !0
    }, i.bestCandidate = function(t, i, e) {
        var n, s, r, o, h, u, a, c, p, l, y, f;
        for (null == e && (e = 10), f = t.size(), h = f.$divide(2), l = f.$divide(4), a = f.x * f.x + f.y * f.y, n = function(t) {
                var e, n, s, r, o, u, c, p, y, f;
                for (e = a, u = new Rectangle(t.x - l.x, t.y - l.y).size(h.x, h.y), y = function() {
                        var t, e, n;
                        for (n = [], t = 0, e = i.length; e > t; t++) c = i[t], u.intersetPoint(c) && n.push(c);
                        return n
                    }(), n = 0, p = y.length; p > n; n++) f = y[n], r = f.x - t.x, o = f.y - t.y, s = r * r + o * o, e > s && (e = s);
                return e
            }, r = null, o = -1, u = s = 0, y = e; y >= 0 ? y > s : s > y; u = y >= 0 ? ++s : --s) {
            if (p = new Vector(t.x + f.x * Math.random(), t.y + f.y * Math.random()), 0 === i.length) return p;
            c = n(p), c > o && (r = p, o = c)
        }
        return r
    }, i
}(PointSet), this.SamplePoints = SamplePoints, StripeBound = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments), this.frequency = new Point, this.stripes = new Point, this.method = "frequency", this.mask = null
    }
    return extend(i, t), i.prototype.setFrequency = function(t, i) {
        return this.frequency = new Vector(t, i), this.method = "frequency"
    }, i.prototype.setStripes = function(t, i) {
        return this.stripes = new Point(t, i), this.method = "stripes"
    }, i.prototype.getStripes = function() {
        var t, i, e, n, s, r, o, h, u, a, c, p;
        for (p = this.size(), c = {
                columns: [],
                rows: []
            }, o = "frequency" === this.method ? this.frequency.clone() : p.$divide(this.stripes).floor(), n = p.$divide(o), e = t = 0, u = o.y - 1; u >= 0 ? u >= t : t >= u; e = u >= 0 ? ++t : --t) r = n.y * e, h = new Pair(0, r).to(p.x, r + n.y).add(this), h.p1.add(this), c.rows.push(h);
        for (e = i = 0, a = o.x - 1; a >= 0 ? a >= i : i >= a; e = a >= 0 ? ++i : --i) s = n.x * e, h = new Pair(s, 0).to(s + n.x + .5, p.y).add(this), h.p1.add(this), c.columns.push(h);
        return c
    }, i.prototype.getStripeLines = function() {
        var t, i, e, n, s, r, o, h, u, a, c, p;
        for (p = this.size(), c = {
                columns: [],
                rows: []
            }, o = "frequency" === this.method ? this.frequency.clone() : p.$divide(this.stripes).floor(), n = p.$divide(o), e = t = 0, u = o.y; u >= 0 ? u >= t : t >= u; e = u >= 0 ? ++t : --t) r = n.y * e, h = new Pair(0, r).to(p.x, r).add(this), h.p1.add(this), c.rows.push(h);
        for (e = i = 0, a = o.x; a >= 0 ? a >= i : i >= a; e = a >= 0 ? ++i : --i) s = n.x * e, h = new Pair(s, 0).to(s, p.y).add(this), h.p1.add(this), c.columns.push(h);
        return c
    }, i.prototype.setMask = function(t, i, e) {
        var n, s;
        return null == e && (e = !1), this.mask = new Rectangle(this.x, this.y), s = this.size(), e ? e = this.$add(e) : (n = s.$subtract(t, i).divide(2), e = new Point(this.x + n.x, this.y + n.y)), this.mask.set(e.x, e.y).size(t, i)
    }, i.prototype.anchorMask = function() {
        var t;
        return t = this.$subtract(this.mask), this.moveBy(t), this.mask.moveBy(t)
    }, i
}(Rectangle), this.StripeBound = StripeBound, UI = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments), this.dragging = !1
    }
    return extend(i, t), i.dragTarget = null, i.prototype.animate = function(t, i, e) {
        return e.fillStyle = "#f00", Form.rect(e, this)
    }, i.prototype.onMouseAction = function(t, e, n, s) {
        return this.intersectPoint(e, n) && ("drag" !== t || i.dragTarget || (this.dragging = !0, i.dragTarget = this)), this.dragging && "move" === t && this.moveTo(e, n).moveBy(this.size().multiply(-.5)), "drop" === t ? (this.dragging = !1, i.dragTarget = null) : void 0
    }, i
}(Rectangle), this.UI = UI, Noise = function(t) {
    function i() {
        var t;
        i.__super__.constructor.apply(this, arguments), this.p = [151, 160, 137, 91, 90, 15, 131, 13, 201, 95, 96, 53, 194, 233, 7, 225, 140, 36, 103, 30, 69, 142, 8, 99, 37, 240, 21, 10, 23, 190, 6, 148, 247, 120, 234, 75, 0, 26, 197, 62, 94, 252, 219, 203, 117, 35, 11, 32, 57, 177, 33, 88, 237, 149, 56, 87, 174, 20, 125, 136, 171, 168, 68, 175, 74, 165, 71, 134, 139, 48, 27, 166, 77, 146, 158, 231, 83, 111, 229, 122, 60, 211, 133, 230, 220, 105, 92, 41, 55, 46, 245, 40, 244, 102, 143, 54, 65, 25, 63, 161, 1, 216, 80, 73, 209, 76, 132, 187, 208, 89, 18, 169, 200, 196, 135, 130, 116, 188, 159, 86, 164, 100, 109, 198, 173, 186, 3, 64, 52, 217, 226, 250, 124, 123, 5, 202, 38, 147, 118, 126, 255, 82, 85, 212, 207, 206, 59, 227, 47, 16, 58, 17, 182, 189, 28, 42, 223, 183, 170, 213, 119, 248, 152, 2, 44, 154, 163, 70, 221, 153, 101, 155, 167, 43, 172, 9, 129, 22, 39, 253, 9, 98, 108, 110, 79, 113, 224, 232, 178, 185, 112, 104, 218, 246, 97, 228, 251, 34, 242, 193, 238, 210, 144, 12, 191, 179, 162, 241, 81, 51, 145, 235, 249, 14, 239, 107, 49, 192, 214, 31, 181, 199, 106, 157, 184, 84, 204, 176, 115, 121, 50, 45, 127, 4, 150, 254, 138, 236, 205, 93, 222, 114, 67, 29, 24, 72, 243, 141, 128, 195, 78, 66, 215, 61, 156, 180], this.perm = function() {
            var i, e;
            for (e = [], t = i = 0; 512 > i; t = ++i) e.push(this.p[255 & t]);
            return e
        }.call(this)
    }
    return extend(i, t), i.prototype.grad3 = [
        [1, 1, 0],
        [-1, 1, 0],
        [1, -1, 0],
        [-1, -1, 0],
        [1, 0, 1],
        [-1, 0, 1],
        [1, 0, -1],
        [-1, 0, -1],
        [0, 1, 1],
        [0, -1, 1],
        [0, 1, -1],
        [0, -1, -1]
    ], i.prototype.simplex = [
        [0, 1, 2, 3],
        [0, 1, 3, 2],
        [0, 0, 0, 0],
        [0, 2, 3, 1],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [1, 2, 3, 0],
        [0, 2, 1, 3],
        [0, 0, 0, 0],
        [0, 3, 1, 2],
        [0, 3, 2, 1],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [1, 3, 2, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [1, 2, 0, 3],
        [0, 0, 0, 0],
        [1, 3, 0, 2],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [2, 3, 0, 1],
        [2, 3, 1, 0],
        [1, 0, 2, 3],
        [1, 0, 3, 2],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [2, 0, 3, 1],
        [0, 0, 0, 0],
        [2, 1, 3, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [2, 0, 1, 3],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [3, 0, 1, 2],
        [3, 0, 2, 1],
        [0, 0, 0, 0],
        [3, 1, 2, 0],
        [2, 1, 0, 3],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [3, 1, 0, 2],
        [0, 0, 0, 0],
        [3, 2, 0, 1],
        [3, 2, 1, 0]
    ], i.prototype.seed = function(t) {
        var i, e, n, s;
        for (t > 0 && 1 > t && (t *= 65536), t = Math.floor(t), 256 > t && (t |= t << 8), n = [], e = i = 0; 255 >= i; e = ++i) s = 1 & e ? this.p[e] ^ 255 & t : this.p[e] ^ t >> 8 & 255, n.push(this.perm[e] = this.perm[e + 256] = s);
        return n
    }, i.prototype._dot = function(t, i, e) {
        return t[0] * i + t[1] * e
    }, i.prototype.perlin2d = function(t, i) {
        var e, n, s, r, o, h, u, a, c, p;
        return null == t && (t = this.x), null == i && (i = this.y), e = function(t) {
            return t * t * t * (t * (6 * t - 15) + 10)
        }, n = Math.floor(t) % 255, s = Math.floor(i) % 255, c = t - n, p = i - s, r = this._dot(this.grad3[(n + this.perm[s]) % 12], c, p), o = this._dot(this.grad3[(n + this.perm[s + 1]) % 12], c, p - 1), h = this._dot(this.grad3[(n + 1 + this.perm[s]) % 12], c - 1, p), u = this._dot(this.grad3[(n + 1 + this.perm[s + 1]) % 12], c - 1, p - 1), a = e(c), Util.lerp(Util.lerp(r, h, a), Util.lerp(o, u, a), e(p))
    }, i.prototype.simplex2d = function(t, i) {
        var e, n, s, r, o, h, u, a, c, p, l, y, f, d, m, g, x, v, z, _, b, w, P, M, S, C, D;
        return null == t && (t = this.x), null == i && (i = this.y), e = .5 * (Math.sqrt(3) - 1), x = (t + i) * e, a = Math.floor(t + x), l = Math.floor(i + x), n = (3 - Math.sqrt(3)) / 6, v = (a + l) * n, s = a - v, r = l - v, w = t - s, S = i - r, w > S ? (c = 1, y = 0) : (c = 0, y = 1), P = w - c + n, C = S - y + n, M = w - 1 + 2 * n, D = S - 1 + 2 * n, p = 255 & a, f = 255 & l, o = this.perm[p + this.perm[f]] % 12, h = this.perm[p + c + this.perm[f + y]] % 12, u = this.perm[p + 1 + this.perm[f + 1]] % 12, z = .5 - w * w - S * S, 0 > z ? d = 0 : (z *= z, d = z * z * this._dot(this.grad3[o], w, S)), _ = .5 - P * P - C * C, 0 > _ ? m = 0 : (_ *= _, m = _ * _ * this._dot(this.grad3[h], P, C)), b = .5 - M * M - D * D, 0 > b ? g = 0 : (b *= b, g = b * b * this._dot(this.grad3[u], M, D)), 70 * (d + m + g)
    }, i
}(Vector), Delaunay = function(t) {
    function i() {
        i.__super__.constructor.apply(this, arguments), this.mesh = []
    }
    return extend(i, t), i.prototype.generate = function() {
        var t, i, e, n, s, r, o, h, u, a, c, p, l, y, f, d, m, g, x, v;
        if (!(this.points.length < 3)) {
            for (f = this.points.length, c = [], a = t = 0, x = f; x > t; a = t += 1) c[a] = a;
            for (c.sort(function(t) {
                    return function(i, e) {
                        return t.points[e].x - t.points[i].x
                    }
                }(this)), g = this.points.slice(), v = this._supertriangle(), g.push(new Vector(v), new Vector(v.p1), new Vector(v.p2)), m = [this._circum(f, f + 1, f + 2, v)], r = [], u = [], i = 0, l = c.length; l > i; i++) {
                for (n = c[i], u = [], p = m.length; p--;) s = m[p], o = g[n].x - s.circle.x, h = g[n].y - s.circle.y, o > 0 && o * o > s.circle.radius * s.circle.radius ? (r.push(s), m.splice(p, 1)) : o * o + h * h - s.circle.radius * s.circle.radius > Const.epsilon || (u.push(s.i, s.j, s.j, s.k, s.k, s.i), m.splice(p, 1));
                for (this._dedupe(u), p = u.length; p > 1;) m.push(this._circum(u[--p], u[--p], n, null, g))
            }
            for (e = 0, y = m.length; y > e; e++) d = m[e], d.i < f && d.j < f && d.k < f && r.push(d);
            return this.mesh = r, this.mesh
        }
    }, i.prototype._supertriangle = function() {
        var t, i, e, n, s, r, o, h, u;
        for (o = new Vector, s = new Vector, u = this.points, t = 0, n = u.length; n > t; t++) h = u[t], o.min(h), s.max(h);
        return i = s.$subtract(o), r = o.$add(s).divide(2), e = Math.max(i.x, i.y), new Triangle(r.$subtract(20 * e, e)).to(r.$add(0, 20 * e), r.$add(20 * e, -e))
    }, i.prototype._triangle = function(t, i, e, n) {
        return null == n && (n = this.points), new Triangle(n[t]).to(n[i], n[e])
    }, i.prototype._circum = function(t, i, e, n, s) {
        return null == n && (n = null), null == s && (s = this.points), n = n || this._triangle(t, i, e, s), {
            i: t,
            j: i,
            k: e,
            triangle: n,
            circle: n.circumcircle()
        }
    }, i.prototype._dedupe = function(t) {
        var i, e, n, s, r, o;
        for (s = t.length; s > 1;)
            for (e = t[--s], i = t[--s], n = s; n > 1;)
                if (o = t[--n], r = t[--n], i === r && e === o || i === o && e === r) {
                    t.splice(s, 2), t.splice(n, 2);
                    break
                }
        return t
    }, i
}(PointSet), this.Delaunay = Delaunay;