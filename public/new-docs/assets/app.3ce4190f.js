const Po = "modulepreload",
    Ls = {},
    Lo = "/new-docs/",
    Ao = function(t, n) {
        return !n || n.length === 0 ? t() : Promise.all(n.map(s => {
            if (s = `${Lo}${s}`, s in Ls) return;
            Ls[s] = !0;
            const r = s.endsWith(".css"),
                o = r ? '[rel="stylesheet"]' : "";
            if (document.querySelector(`link[href="${s}"]${o}`)) return;
            const i = document.createElement("link");
            if (i.rel = r ? "stylesheet" : Po, r || (i.as = "script", i.crossOrigin = ""), i.href = s, document.head.appendChild(i), r) return new Promise((l, c) => { i.addEventListener("load", l), i.addEventListener("error", () => c(new Error(`Unable to preload CSS for ${s}`))) })
        })).then(() => t())
    };

function es(e, t) {
    const n = Object.create(null),
        s = e.split(",");
    for (let r = 0; r < s.length; r++) n[s[r]] = !0;
    return t ? r => !!n[r.toLowerCase()] : r => !!n[r]
}
const Io = "itemscope,allowfullscreen,formnovalidate,ismap,nomodule,novalidate,readonly",
    Oo = es(Io);

function fr(e) { return !!e || e === "" }

function ts(e) {
    if (R(e)) {
        const t = {};
        for (let n = 0; n < e.length; n++) {
            const s = e[n],
                r = he(s) ? So(s) : ts(s);
            if (r)
                for (const o in r) t[o] = r[o]
        }
        return t
    } else { if (he(e)) return e; if (ae(e)) return e }
}
const Mo = /;(?![^(]*\))/g,
    Ro = /:(.+)/;

function So(e) {
    const t = {};
    return e.split(Mo).forEach(n => {
        if (n) {
            const s = n.split(Ro);
            s.length > 1 && (t[s[0].trim()] = s[1].trim())
        }
    }), t
}

function ct(e) {
    let t = "";
    if (he(e)) t = e;
    else if (R(e))
        for (let n = 0; n < e.length; n++) {
            const s = ct(e[n]);
            s && (t += s + " ")
        } else if (ae(e))
            for (const n in e) e[n] && (t += n + " ");
    return t.trim()
}
const be = e => he(e) ? e : e == null ? "" : R(e) || ae(e) && (e.toString === _r || !N(e.toString)) ? JSON.stringify(e, dr, 2) : String(e),
    dr = (e, t) => t && t.__v_isRef ? dr(e, t.value) : mt(t) ? {
        [`Map(${t.size})`]: [...t.entries()].reduce((n, [s, r]) => (n[`${s} =>`] = r, n), {})
    } : hr(t) ? {
        [`Set(${t.size})`]: [...t.values()]
    } : ae(t) && !R(t) && !gr(t) ? String(t) : t,
    Q = {},
    gt = [],
    Me = () => {},
    Fo = () => !1,
    No = /^on[^a-z]/,
    qt = e => No.test(e),
    ns = e => e.startsWith("onUpdate:"),
    ye = Object.assign,
    ss = (e, t) => {
        const n = e.indexOf(t);
        n > -1 && e.splice(n, 1)
    },
    Ho = Object.prototype.hasOwnProperty,
    K = (e, t) => Ho.call(e, t),
    R = Array.isArray,
    mt = e => mn(e) === "[object Map]",
    hr = e => mn(e) === "[object Set]",
    N = e => typeof e == "function",
    he = e => typeof e == "string",
    rs = e => typeof e == "symbol",
    ae = e => e !== null && typeof e == "object",
    pr = e => ae(e) && N(e.then) && N(e.catch),
    _r = Object.prototype.toString,
    mn = e => _r.call(e),
    Uo = e => mn(e).slice(8, -1),
    gr = e => mn(e) === "[object Object]",
    os = e => he(e) && e !== "NaN" && e[0] !== "-" && "" + parseInt(e, 10) === e,
    At = es(",key,ref,ref_for,ref_key,onVnodeBeforeMount,onVnodeMounted,onVnodeBeforeUpdate,onVnodeUpdated,onVnodeBeforeUnmount,onVnodeUnmounted"),
    vn = e => { const t = Object.create(null); return n => t[n] || (t[n] = e(n)) },
    Bo = /-(\w)/g,
    He = vn(e => e.replace(Bo, (t, n) => n ? n.toUpperCase() : "")),
    jo = /\B([A-Z])/g,
    xt = vn(e => e.replace(jo, "-$1").toLowerCase()),
    bn = vn(e => e.charAt(0).toUpperCase() + e.slice(1)),
    Rn = vn(e => e ? `on${bn(e)}` : ""),
    Nt = (e, t) => !Object.is(e, t),
    Sn = (e, t) => { for (let n = 0; n < e.length; n++) e[n](t) },
    sn = (e, t, n) => { Object.defineProperty(e, t, { configurable: !0, enumerable: !1, value: n }) },
    Do = e => { const t = parseFloat(e); return isNaN(t) ? e : t };
let As;
const Ko = () => As || (As = typeof globalThis != "undefined" ? globalThis : typeof self != "undefined" ? self : typeof window != "undefined" ? window : typeof global != "undefined" ? global : {});
let Fe;
class Wo {
    constructor(t = !1) { this.active = !0, this.effects = [], this.cleanups = [], !t && Fe && (this.parent = Fe, this.index = (Fe.scopes || (Fe.scopes = [])).push(this) - 1) }
    run(t) { if (this.active) { const n = Fe; try { return Fe = this, t() } finally { Fe = n } } }
    on() { Fe = this }
    off() { Fe = this.parent }
    stop(t) {
        if (this.active) {
            let n, s;
            for (n = 0, s = this.effects.length; n < s; n++) this.effects[n].stop();
            for (n = 0, s = this.cleanups.length; n < s; n++) this.cleanups[n]();
            if (this.scopes)
                for (n = 0, s = this.scopes.length; n < s; n++) this.scopes[n].stop(!0);
            if (this.parent && !t) {
                const r = this.parent.scopes.pop();
                r && r !== this && (this.parent.scopes[this.index] = r, r.index = this.index)
            }
            this.active = !1
        }
    }
}

function qo(e, t = Fe) { t && t.active && t.effects.push(e) }
const is = e => { const t = new Set(e); return t.w = 0, t.n = 0, t },
    mr = e => (e.w & Ge) > 0,
    vr = e => (e.n & Ge) > 0,
    zo = ({ deps: e }) => {
        if (e.length)
            for (let t = 0; t < e.length; t++) e[t].w |= Ge
    },
    Vo = e => {
        const { deps: t } = e;
        if (t.length) {
            let n = 0;
            for (let s = 0; s < t.length; s++) {
                const r = t[s];
                mr(r) && !vr(r) ? r.delete(e) : t[n++] = r, r.w &= ~Ge, r.n &= ~Ge
            }
            t.length = n
        }
    },
    jn = new WeakMap;
let Pt = 0,
    Ge = 1;
const Dn = 30;
let Ie;
const rt = Symbol(""),
    Kn = Symbol("");
class ls {
    constructor(t, n = null, s) { this.fn = t, this.scheduler = n, this.active = !0, this.deps = [], this.parent = void 0, qo(this, s) }
    run() {
        if (!this.active) return this.fn();
        let t = Ie,
            n = Ze;
        for (; t;) {
            if (t === this) return;
            t = t.parent
        }
        try { return this.parent = Ie, Ie = this, Ze = !0, Ge = 1 << ++Pt, Pt <= Dn ? zo(this) : Is(this), this.fn() } finally { Pt <= Dn && Vo(this), Ge = 1 << --Pt, Ie = this.parent, Ze = n, this.parent = void 0, this.deferStop && this.stop() }
    }
    stop() { Ie === this ? this.deferStop = !0 : this.active && (Is(this), this.onStop && this.onStop(), this.active = !1) }
}

function Is(e) {
    const { deps: t } = e;
    if (t.length) {
        for (let n = 0; n < t.length; n++) t[n].delete(e);
        t.length = 0
    }
}
let Ze = !0;
const br = [];

function wt() { br.push(Ze), Ze = !1 }

function $t() {
    const e = br.pop();
    Ze = e === void 0 ? !0 : e
}

function Te(e, t, n) {
    if (Ze && Ie) {
        let s = jn.get(e);
        s || jn.set(e, s = new Map);
        let r = s.get(n);
        r || s.set(n, r = is()), yr(r)
    }
}

function yr(e, t) {
    let n = !1;
    Pt <= Dn ? vr(e) || (e.n |= Ge, n = !mr(e)) : n = !e.has(Ie), n && (e.add(Ie), Ie.deps.push(e))
}

function Ke(e, t, n, s, r, o) {
    const i = jn.get(e);
    if (!i) return;
    let l = [];
    if (t === "clear") l = [...i.values()];
    else if (n === "length" && R(e)) i.forEach((c, f) => {
        (f === "length" || f >= s) && l.push(c)
    });
    else switch (n !== void 0 && l.push(i.get(n)), t) {
        case "add":
            R(e) ? os(n) && l.push(i.get("length")) : (l.push(i.get(rt)), mt(e) && l.push(i.get(Kn)));
            break;
        case "delete":
            R(e) || (l.push(i.get(rt)), mt(e) && l.push(i.get(Kn)));
            break;
        case "set":
            mt(e) && l.push(i.get(rt));
            break
    }
    if (l.length === 1) l[0] && Wn(l[0]);
    else {
        const c = [];
        for (const f of l) f && c.push(...f);
        Wn(is(c))
    }
}

function Wn(e, t) { for (const n of R(e) ? e : [...e])(n !== Ie || n.allowRecurse) && (n.scheduler ? n.scheduler() : n.run()) }
const Jo = es("__proto__,__v_isRef,__isVue"),
    xr = new Set(Object.getOwnPropertyNames(Symbol).map(e => Symbol[e]).filter(rs)),
    Yo = cs(),
    Xo = cs(!1, !0),
    Zo = cs(!0),
    Os = Qo();

function Qo() { const e = {}; return ["includes", "indexOf", "lastIndexOf"].forEach(t => { e[t] = function(...n) { const s = z(this); for (let o = 0, i = this.length; o < i; o++) Te(s, "get", o + ""); const r = s[t](...n); return r === -1 || r === !1 ? s[t](...n.map(z)) : r } }), ["push", "pop", "shift", "unshift", "splice"].forEach(t => { e[t] = function(...n) { wt(); const s = z(this)[t].apply(this, n); return $t(), s } }), e }

function cs(e = !1, t = !1) { return function(s, r, o) { if (r === "__v_isReactive") return !e; if (r === "__v_isReadonly") return e; if (r === "__v_isShallow") return t; if (r === "__v_raw" && o === (e ? t ? pi : Er : t ? Cr : kr).get(s)) return s; const i = R(s); if (!e && i && K(Os, r)) return Reflect.get(Os, r, o); const l = Reflect.get(s, r, o); return (rs(r) ? xr.has(r) : Jo(r)) || (e || Te(s, "get", r), t) ? l : de(l) ? !i || !os(r) ? l.value : l : ae(l) ? e ? Tr(l) : xn(l) : l } }
const Go = wr(),
    ei = wr(!0);

function wr(e = !1) {
    return function(n, s, r, o) {
        let i = n[s];
        if (Ht(i) && de(i) && !de(r)) return !1;
        if (!e && !Ht(r) && (Pr(r) || (r = z(r), i = z(i)), !R(n) && de(i) && !de(r))) return i.value = r, !0;
        const l = R(n) && os(s) ? Number(s) < n.length : K(n, s),
            c = Reflect.set(n, s, r, o);
        return n === z(o) && (l ? Nt(r, i) && Ke(n, "set", s, r) : Ke(n, "add", s, r)), c
    }
}

function ti(e, t) {
    const n = K(e, t);
    e[t];
    const s = Reflect.deleteProperty(e, t);
    return s && n && Ke(e, "delete", t, void 0), s
}

function ni(e, t) { const n = Reflect.has(e, t); return (!rs(t) || !xr.has(t)) && Te(e, "has", t), n }

function si(e) { return Te(e, "iterate", R(e) ? "length" : rt), Reflect.ownKeys(e) }
const $r = { get: Yo, set: Go, deleteProperty: ti, has: ni, ownKeys: si },
    ri = { get: Zo, set(e, t) { return !0 }, deleteProperty(e, t) { return !0 } },
    oi = ye({}, $r, { get: Xo, set: ei }),
    us = e => e,
    yn = e => Reflect.getPrototypeOf(e);

function Yt(e, t, n = !1, s = !1) {
    e = e.__v_raw;
    const r = z(e),
        o = z(t);
    t !== o && !n && Te(r, "get", t), !n && Te(r, "get", o);
    const { has: i } = yn(r), l = s ? us : n ? ds : Ut;
    if (i.call(r, t)) return l(e.get(t));
    if (i.call(r, o)) return l(e.get(o));
    e !== r && e.get(t)
}

function Xt(e, t = !1) {
    const n = this.__v_raw,
        s = z(n),
        r = z(e);
    return e !== r && !t && Te(s, "has", e), !t && Te(s, "has", r), e === r ? n.has(e) : n.has(e) || n.has(r)
}

function Zt(e, t = !1) { return e = e.__v_raw, !t && Te(z(e), "iterate", rt), Reflect.get(e, "size", e) }

function Ms(e) { e = z(e); const t = z(this); return yn(t).has.call(t, e) || (t.add(e), Ke(t, "add", e, e)), this }

function Rs(e, t) {
    t = z(t);
    const n = z(this),
        { has: s, get: r } = yn(n);
    let o = s.call(n, e);
    o || (e = z(e), o = s.call(n, e));
    const i = r.call(n, e);
    return n.set(e, t), o ? Nt(t, i) && Ke(n, "set", e, t) : Ke(n, "add", e, t), this
}

function Ss(e) {
    const t = z(this),
        { has: n, get: s } = yn(t);
    let r = n.call(t, e);
    r || (e = z(e), r = n.call(t, e)), s && s.call(t, e);
    const o = t.delete(e);
    return r && Ke(t, "delete", e, void 0), o
}

function Fs() {
    const e = z(this),
        t = e.size !== 0,
        n = e.clear();
    return t && Ke(e, "clear", void 0, void 0), n
}

function Qt(e, t) {
    return function(s, r) {
        const o = this,
            i = o.__v_raw,
            l = z(i),
            c = t ? us : e ? ds : Ut;
        return !e && Te(l, "iterate", rt), i.forEach((f, h) => s.call(r, c(f), c(h), o))
    }
}

function Gt(e, t, n) {
    return function(...s) {
        const r = this.__v_raw,
            o = z(r),
            i = mt(o),
            l = e === "entries" || e === Symbol.iterator && i,
            c = e === "keys" && i,
            f = r[e](...s),
            h = n ? us : t ? ds : Ut;
        return !t && Te(o, "iterate", c ? Kn : rt), { next() { const { value: g, done: x } = f.next(); return x ? { value: g, done: x } : { value: l ? [h(g[0]), h(g[1])] : h(g), done: x } }, [Symbol.iterator]() { return this } }
    }
}

function Ve(e) { return function(...t) { return e === "delete" ? !1 : this } }

function ii() {
    const e = {get(o) { return Yt(this, o) }, get size() { return Zt(this) }, has: Xt, add: Ms, set: Rs, delete: Ss, clear: Fs, forEach: Qt(!1, !1) },
        t = {get(o) { return Yt(this, o, !1, !0) }, get size() { return Zt(this) }, has: Xt, add: Ms, set: Rs, delete: Ss, clear: Fs, forEach: Qt(!1, !0) },
        n = {get(o) { return Yt(this, o, !0) }, get size() { return Zt(this, !0) }, has(o) { return Xt.call(this, o, !0) }, add: Ve("add"), set: Ve("set"), delete: Ve("delete"), clear: Ve("clear"), forEach: Qt(!0, !1) },
        s = {get(o) { return Yt(this, o, !0, !0) }, get size() { return Zt(this, !0) }, has(o) { return Xt.call(this, o, !0) }, add: Ve("add"), set: Ve("set"), delete: Ve("delete"), clear: Ve("clear"), forEach: Qt(!0, !0) };
    return ["keys", "values", "entries", Symbol.iterator].forEach(o => { e[o] = Gt(o, !1, !1), n[o] = Gt(o, !0, !1), t[o] = Gt(o, !1, !0), s[o] = Gt(o, !0, !0) }), [e, n, t, s]
}
const [li, ci, ui, ai] = ii();

function as(e, t) { const n = t ? e ? ai : ui : e ? ci : li; return (s, r, o) => r === "__v_isReactive" ? !e : r === "__v_isReadonly" ? e : r === "__v_raw" ? s : Reflect.get(K(n, r) && r in s ? n : s, r, o) }
const fi = { get: as(!1, !1) },
    di = { get: as(!1, !0) },
    hi = { get: as(!0, !1) },
    kr = new WeakMap,
    Cr = new WeakMap,
    Er = new WeakMap,
    pi = new WeakMap;

function _i(e) {
    switch (e) {
        case "Object":
        case "Array":
            return 1;
        case "Map":
        case "Set":
        case "WeakMap":
        case "WeakSet":
            return 2;
        default:
            return 0
    }
}

function gi(e) { return e.__v_skip || !Object.isExtensible(e) ? 0 : _i(Uo(e)) }

function xn(e) { return Ht(e) ? e : fs(e, !1, $r, fi, kr) }

function mi(e) { return fs(e, !1, oi, di, Cr) }

function Tr(e) { return fs(e, !0, ri, hi, Er) }

function fs(e, t, n, s, r) { if (!ae(e) || e.__v_raw && !(t && e.__v_isReactive)) return e; const o = r.get(e); if (o) return o; const i = gi(e); if (i === 0) return e; const l = new Proxy(e, i === 2 ? s : n); return r.set(e, l), l }

function vt(e) { return Ht(e) ? vt(e.__v_raw) : !!(e && e.__v_isReactive) }

function Ht(e) { return !!(e && e.__v_isReadonly) }

function Pr(e) { return !!(e && e.__v_isShallow) }

function Lr(e) { return vt(e) || Ht(e) }

function z(e) { const t = e && e.__v_raw; return t ? z(t) : e }

function It(e) { return sn(e, "__v_skip", !0), e }
const Ut = e => ae(e) ? xn(e) : e,
    ds = e => ae(e) ? Tr(e) : e;

function Ar(e) { Ze && Ie && (e = z(e), yr(e.dep || (e.dep = is()))) }

function Ir(e, t) { e = z(e), e.dep && Wn(e.dep) }

function de(e) { return !!(e && e.__v_isRef === !0) }

function wn(e) { return Or(e, !1) }

function vi(e) { return Or(e, !0) }

function Or(e, t) { return de(e) ? e : new bi(e, t) }
class bi {
    constructor(t, n) { this.__v_isShallow = n, this.dep = void 0, this.__v_isRef = !0, this._rawValue = n ? t : z(t), this._value = n ? t : Ut(t) }
    get value() { return Ar(this), this._value }
    set value(t) { t = this.__v_isShallow ? t : z(t), Nt(t, this._rawValue) && (this._rawValue = t, this._value = this.__v_isShallow ? t : Ut(t), Ir(this)) }
}

function k(e) { return de(e) ? e.value : e }
const yi = { get: (e, t, n) => k(Reflect.get(e, t, n)), set: (e, t, n, s) => { const r = e[t]; return de(r) && !de(n) ? (r.value = n, !0) : Reflect.set(e, t, n, s) } };

function Mr(e) { return vt(e) ? e : new Proxy(e, yi) }

function Rr(e) { const t = R(e) ? new Array(e.length) : {}; for (const n in e) t[n] = wi(e, n); return t }
class xi {
    constructor(t, n, s) { this._object = t, this._key = n, this._defaultValue = s, this.__v_isRef = !0 }
    get value() { const t = this._object[this._key]; return t === void 0 ? this._defaultValue : t }
    set value(t) { this._object[this._key] = t }
}

function wi(e, t, n) { const s = e[t]; return de(s) ? s : new xi(e, t, n) }
class $i {
    constructor(t, n, s, r) { this._setter = n, this.dep = void 0, this.__v_isRef = !0, this._dirty = !0, this.effect = new ls(t, () => { this._dirty || (this._dirty = !0, Ir(this)) }), this.effect.computed = this, this.effect.active = this._cacheable = !r, this.__v_isReadonly = s }
    get value() { const t = z(this); return Ar(t), (t._dirty || !t._cacheable) && (t._dirty = !1, t._value = t.effect.run()), t._value }
    set value(t) { this._setter(t) }
}

function ki(e, t, n = !1) { let s, r; const o = N(e); return o ? (s = e, r = Me) : (s = e.get, r = e.set), new $i(s, r, o || !r, n) }

function Qe(e, t, n, s) { let r; try { r = s ? e(...s) : e() } catch (o) { $n(o, t, n) } return r }

function Re(e, t, n, s) { if (N(e)) { const o = Qe(e, t, n, s); return o && pr(o) && o.catch(i => { $n(i, t, n) }), o } const r = []; for (let o = 0; o < e.length; o++) r.push(Re(e[o], t, n, s)); return r }

function $n(e, t, n, s = !0) {
    const r = t ? t.vnode : null;
    if (t) {
        let o = t.parent;
        const i = t.proxy,
            l = n;
        for (; o;) {
            const f = o.ec;
            if (f) {
                for (let h = 0; h < f.length; h++)
                    if (f[h](e, i, l) === !1) return
            }
            o = o.parent
        }
        const c = t.appContext.config.errorHandler;
        if (c) { Qe(c, null, 10, [e, i, l]); return }
    }
    Ci(e, n, r, s)
}

function Ci(e, t, n, s = !0) { console.error(e) }
let rn = !1,
    qn = !1;
const Ee = [];
let De = 0;
const Ot = [];
let Lt = null,
    ht = 0;
const Mt = [];
let Ye = null,
    pt = 0;
const Sr = Promise.resolve();
let hs = null,
    zn = null;

function Fr(e) { const t = hs || Sr; return e ? t.then(this ? e.bind(this) : e) : t }

function Ei(e) {
    let t = De + 1,
        n = Ee.length;
    for (; t < n;) {
        const s = t + n >>> 1;
        Bt(Ee[s]) < e ? t = s + 1 : n = s
    }
    return t
}

function Nr(e) {
    (!Ee.length || !Ee.includes(e, rn && e.allowRecurse ? De + 1 : De)) && e !== zn && (e.id == null ? Ee.push(e) : Ee.splice(Ei(e.id), 0, e), Hr())
}

function Hr() {!rn && !qn && (qn = !0, hs = Sr.then(Br)) }

function Ti(e) {
    const t = Ee.indexOf(e);
    t > De && Ee.splice(t, 1)
}

function Ur(e, t, n, s) { R(e) ? n.push(...e) : (!t || !t.includes(e, e.allowRecurse ? s + 1 : s)) && n.push(e), Hr() }

function Pi(e) { Ur(e, Lt, Ot, ht) }

function Li(e) { Ur(e, Ye, Mt, pt) }

function ps(e, t = null) {
    if (Ot.length) {
        for (zn = t, Lt = [...new Set(Ot)], Ot.length = 0, ht = 0; ht < Lt.length; ht++) Lt[ht]();
        Lt = null, ht = 0, zn = null, ps(e, t)
    }
}

function on(e) {
    if (Mt.length) {
        const t = [...new Set(Mt)];
        if (Mt.length = 0, Ye) { Ye.push(...t); return }
        for (Ye = t, Ye.sort((n, s) => Bt(n) - Bt(s)), pt = 0; pt < Ye.length; pt++) Ye[pt]();
        Ye = null, pt = 0
    }
}
const Bt = e => e.id == null ? 1 / 0 : e.id;

function Br(e) {
    qn = !1, rn = !0, ps(e), Ee.sort((n, s) => Bt(n) - Bt(s));
    const t = Me;
    try {
        for (De = 0; De < Ee.length; De++) {
            const n = Ee[De];
            n && n.active !== !1 && Qe(n, null, 14)
        }
    } finally { De = 0, Ee.length = 0, on(), rn = !1, hs = null, (Ee.length || Ot.length || Mt.length) && Br(e) }
}

function Ai(e, t, ...n) {
    if (e.isUnmounted) return;
    const s = e.vnode.props || Q;
    let r = n;
    const o = t.startsWith("update:"),
        i = o && t.slice(7);
    if (i && i in s) {
        const h = `${i==="modelValue"?"model":i}Modifiers`,
            { number: g, trim: x } = s[h] || Q;
        x ? r = n.map(P => P.trim()) : g && (r = n.map(Do))
    }
    let l, c = s[l = Rn(t)] || s[l = Rn(He(t))];
    !c && o && (c = s[l = Rn(xt(t))]), c && Re(c, e, 6, r);
    const f = s[l + "Once"];
    if (f) {
        if (!e.emitted) e.emitted = {};
        else if (e.emitted[l]) return;
        e.emitted[l] = !0, Re(f, e, 6, r)
    }
}

function jr(e, t, n = !1) {
    const s = t.emitsCache,
        r = s.get(e);
    if (r !== void 0) return r;
    const o = e.emits;
    let i = {},
        l = !1;
    if (!N(e)) {
        const c = f => {
            const h = jr(f, t, !0);
            h && (l = !0, ye(i, h))
        };
        !n && t.mixins.length && t.mixins.forEach(c), e.extends && c(e.extends), e.mixins && e.mixins.forEach(c)
    }
    return !o && !l ? (s.set(e, null), null) : (R(o) ? o.forEach(c => i[c] = null) : ye(i, o), s.set(e, i), i)
}

function kn(e, t) { return !e || !qt(t) ? !1 : (t = t.slice(2).replace(/Once$/, ""), K(e, t[0].toLowerCase() + t.slice(1)) || K(e, xt(t)) || K(e, t)) }
let ke = null,
    Cn = null;

function ln(e) { const t = ke; return ke = e, Cn = e && e.type.__scopeId || null, t }

function Dr(e) { Cn = e }

function Kr() { Cn = null }

function je(e, t = ke, n) {
    if (!t || e._n) return e;
    const s = (...r) => {
        s._d && zs(-1);
        const o = ln(t),
            i = e(...r);
        return ln(o), s._d && zs(1), i
    };
    return s._n = !0, s._c = !0, s._d = !0, s
}

function Fn(e) {
    const { type: t, vnode: n, proxy: s, withProxy: r, props: o, propsOptions: [i], slots: l, attrs: c, emit: f, render: h, renderCache: g, data: x, setupState: P, ctx: M, inheritAttrs: V } = e;
    let m, w;
    const W = ln(e);
    try {
        if (n.shapeFlag & 4) {
            const U = r || s;
            m = Ae(h.call(U, U, g, o, P, x, M)), w = c
        } else {
            const U = t;
            m = Ae(U.length > 1 ? U(o, { attrs: c, slots: l, emit: f }) : U(o, null)), w = t.props ? c : Ii(c)
        }
    } catch (U) { Ft.length = 0, $n(U, e, 1), m = H(We) }
    let I = m;
    if (w && V !== !1) {
        const U = Object.keys(w),
            { shapeFlag: X } = I;
        U.length && X & 7 && (i && U.some(ns) && (w = Oi(w, i)), I = Kt(I, w))
    }
    return n.dirs && (I.dirs = I.dirs ? I.dirs.concat(n.dirs) : n.dirs), n.transition && (I.transition = n.transition), m = I, ln(W), m
}
const Ii = e => { let t; for (const n in e)(n === "class" || n === "style" || qt(n)) && ((t || (t = {}))[n] = e[n]); return t },
    Oi = (e, t) => { const n = {}; for (const s in e)(!ns(s) || !(s.slice(9) in t)) && (n[s] = e[s]); return n };

function Mi(e, t, n) { const { props: s, children: r, component: o } = e, { props: i, children: l, patchFlag: c } = t, f = o.emitsOptions; if (t.dirs || t.transition) return !0; if (n && c >= 0) { if (c & 1024) return !0; if (c & 16) return s ? Ns(s, i, f) : !!i; if (c & 8) { const h = t.dynamicProps; for (let g = 0; g < h.length; g++) { const x = h[g]; if (i[x] !== s[x] && !kn(f, x)) return !0 } } } else return (r || l) && (!l || !l.$stable) ? !0 : s === i ? !1 : s ? i ? Ns(s, i, f) : !0 : !!i; return !1 }

function Ns(e, t, n) { const s = Object.keys(t); if (s.length !== Object.keys(e).length) return !0; for (let r = 0; r < s.length; r++) { const o = s[r]; if (t[o] !== e[o] && !kn(n, o)) return !0 } return !1 }

function Ri({ vnode: e, parent: t }, n) { for (; t && t.subTree === e;)(e = t.vnode).el = n, t = t.parent }
const Si = e => e.__isSuspense;

function Wr(e, t) { t && t.pendingBranch ? R(e) ? t.effects.push(...e) : t.effects.push(e) : Li(e) }

function Fi(e, t) {
    if (pe) {
        let n = pe.provides;
        const s = pe.parent && pe.parent.provides;
        s === n && (n = pe.provides = Object.create(s)), n[e] = t
    }
}

function Rt(e, t, n = !1) { const s = pe || ke; if (s) { const r = s.parent == null ? s.vnode.appContext && s.vnode.appContext.provides : s.parent.provides; if (r && e in r) return r[e]; if (arguments.length > 1) return n && N(t) ? t.call(s.proxy) : t } }

function qr(e, t) { return _s(e, null, t) }
const Hs = {};

function ot(e, t, n) { return _s(e, t, n) }

function _s(e, t, { immediate: n, deep: s, flush: r, onTrack: o, onTrigger: i } = Q) {
    const l = pe;
    let c, f = !1,
        h = !1;
    if (de(e) ? (c = () => e.value, f = Pr(e)) : vt(e) ? (c = () => e, s = !0) : R(e) ? (h = !0, f = e.some(vt), c = () => e.map(w => { if (de(w)) return w.value; if (vt(w)) return _t(w); if (N(w)) return Qe(w, l, 2) })) : N(e) ? t ? c = () => Qe(e, l, 2) : c = () => { if (!(l && l.isUnmounted)) return g && g(), Re(e, l, 3, [x]) } : c = Me, t && s) {
        const w = c;
        c = () => _t(w())
    }
    let g, x = w => { g = m.onStop = () => { Qe(w, l, 4) } };
    if (Wt) return x = Me, t ? n && Re(t, l, 3, [c(), h ? [] : void 0, x]) : c(), Me;
    let P = h ? [] : Hs;
    const M = () => {
        if (!!m.active)
            if (t) {
                const w = m.run();
                (s || f || (h ? w.some((W, I) => Nt(W, P[I])) : Nt(w, P))) && (g && g(), Re(t, l, 3, [w, P === Hs ? void 0 : P, x]), P = w)
            } else m.run()
    };
    M.allowRecurse = !!t;
    let V;
    r === "sync" ? V = M : r === "post" ? V = () => $e(M, l && l.suspense) : V = () => {!l || l.isMounted ? Pi(M) : M() };
    const m = new ls(c, V);
    return t ? n ? M() : P = m.run() : r === "post" ? $e(m.run.bind(m), l && l.suspense) : m.run(), () => { m.stop(), l && l.scope && ss(l.scope.effects, m) }
}

function Ni(e, t, n) {
    const s = this.proxy,
        r = he(e) ? e.includes(".") ? zr(s, e) : () => s[e] : e.bind(s, s);
    let o;
    N(t) ? o = t : (o = t.handler, n = t);
    const i = pe;
    bt(this);
    const l = _s(r, o.bind(s), n);
    return i ? bt(i) : lt(), l
}

function zr(e, t) { const n = t.split("."); return () => { let s = e; for (let r = 0; r < n.length && s; r++) s = s[n[r]]; return s } }

function _t(e, t) {
    if (!ae(e) || e.__v_skip || (t = t || new Set, t.has(e))) return e;
    if (t.add(e), de(e)) _t(e.value, t);
    else if (R(e))
        for (let n = 0; n < e.length; n++) _t(e[n], t);
    else if (hr(e) || mt(e)) e.forEach(n => { _t(n, t) });
    else if (gr(e))
        for (const n in e) _t(e[n], t);
    return e
}

function ie(e) { return N(e) ? { setup: e, name: e.name } : e }
const jt = e => !!e.type.__asyncLoader,
    Vr = e => e.type.__isKeepAlive;

function Hi(e, t) { Jr(e, "a", t) }

function Ui(e, t) { Jr(e, "da", t) }

function Jr(e, t, n = pe) {
    const s = e.__wdc || (e.__wdc = () => {
        let r = n;
        for (; r;) {
            if (r.isDeactivated) return;
            r = r.parent
        }
        return e()
    });
    if (En(t, s, n), n) { let r = n.parent; for (; r && r.parent;) Vr(r.parent.vnode) && Bi(s, t, n, r), r = r.parent }
}

function Bi(e, t, n, s) {
    const r = En(t, e, s, !0);
    Tn(() => { ss(s[t], r) }, n)
}

function En(e, t, n = pe, s = !1) {
    if (n) {
        const r = n[e] || (n[e] = []),
            o = t.__weh || (t.__weh = (...i) => {
                if (n.isUnmounted) return;
                wt(), bt(n);
                const l = Re(t, n, e, i);
                return lt(), $t(), l
            });
        return s ? r.unshift(o) : r.push(o), o
    }
}
const qe = e => (t, n = pe) => (!Wt || e === "sp") && En(e, t, n),
    ji = qe("bm"),
    kt = qe("m"),
    Di = qe("bu"),
    Yr = qe("u"),
    Ki = qe("bum"),
    Tn = qe("um"),
    Wi = qe("sp"),
    qi = qe("rtg"),
    zi = qe("rtc");

function Vi(e, t = pe) { En("ec", e, t) }
let Vn = !0;

function Ji(e) {
    const t = Zr(e),
        n = e.proxy,
        s = e.ctx;
    Vn = !1, t.beforeCreate && Us(t.beforeCreate, e, "bc");
    const { data: r, computed: o, methods: i, watch: l, provide: c, inject: f, created: h, beforeMount: g, mounted: x, beforeUpdate: P, updated: M, activated: V, deactivated: m, beforeDestroy: w, beforeUnmount: W, destroyed: I, unmounted: U, render: X, renderTracked: Z, renderTriggered: B, errorCaptured: le, serverPrefetch: ne, expose: re, inheritAttrs: _e, components: D, directives: oe, filters: xe } = t;
    if (f && Yi(f, s, null, e.appContext.config.unwrapInjectedRef), i)
        for (const se in i) {
            const G = i[se];
            N(G) && (s[se] = G.bind(n))
        }
    if (r) {
        const se = r.call(n, n);
        ae(se) && (e.data = xn(se))
    }
    if (Vn = !0, o)
        for (const se in o) {
            const G = o[se],
                Ue = N(G) ? G.bind(n, n) : N(G.get) ? G.get.bind(n, n) : Me,
                In = !N(G) && N(G.set) ? G.set.bind(n) : Me,
                Ct = j({ get: Ue, set: In });
            Object.defineProperty(s, se, { enumerable: !0, configurable: !0, get: () => Ct.value, set: at => Ct.value = at })
        }
    if (l)
        for (const se in l) Xr(l[se], s, n, se);
    if (c) {
        const se = N(c) ? c.call(n) : c;
        Reflect.ownKeys(se).forEach(G => { Fi(G, se[G]) })
    }
    h && Us(h, e, "c");

    function we(se, G) { R(G) ? G.forEach(Ue => se(Ue.bind(n))) : G && se(G.bind(n)) }
    if (we(ji, g), we(kt, x), we(Di, P), we(Yr, M), we(Hi, V), we(Ui, m), we(Vi, le), we(zi, Z), we(qi, B), we(Ki, W), we(Tn, U), we(Wi, ne), R(re))
        if (re.length) {
            const se = e.exposed || (e.exposed = {});
            re.forEach(G => { Object.defineProperty(se, G, { get: () => n[G], set: Ue => n[G] = Ue }) })
        } else e.exposed || (e.exposed = {});
    X && e.render === Me && (e.render = X), _e != null && (e.inheritAttrs = _e), D && (e.components = D), oe && (e.directives = oe)
}

function Yi(e, t, n = Me, s = !1) {
    R(e) && (e = Jn(e));
    for (const r in e) {
        const o = e[r];
        let i;
        ae(o) ? "default" in o ? i = Rt(o.from || r, o.default, !0) : i = Rt(o.from || r) : i = Rt(o), de(i) && s ? Object.defineProperty(t, r, { enumerable: !0, configurable: !0, get: () => i.value, set: l => i.value = l }) : t[r] = i
    }
}

function Us(e, t, n) { Re(R(e) ? e.map(s => s.bind(t.proxy)) : e.bind(t.proxy), t, n) }

function Xr(e, t, n, s) {
    const r = s.includes(".") ? zr(n, s) : () => n[s];
    if (he(e)) {
        const o = t[e];
        N(o) && ot(r, o)
    } else if (N(e)) ot(r, e.bind(n));
    else if (ae(e))
        if (R(e)) e.forEach(o => Xr(o, t, n, s));
        else {
            const o = N(e.handler) ? e.handler.bind(n) : t[e.handler];
            N(o) && ot(r, o, e)
        }
}

function Zr(e) {
    const t = e.type,
        { mixins: n, extends: s } = t,
        { mixins: r, optionsCache: o, config: { optionMergeStrategies: i } } = e.appContext,
        l = o.get(t);
    let c;
    return l ? c = l : !r.length && !n && !s ? c = t : (c = {}, r.length && r.forEach(f => cn(c, f, i, !0)), cn(c, t, i)), o.set(t, c), c
}

function cn(e, t, n, s = !1) {
    const { mixins: r, extends: o } = t;
    o && cn(e, o, n, !0), r && r.forEach(i => cn(e, i, n, !0));
    for (const i in t)
        if (!(s && i === "expose")) {
            const l = Xi[i] || n && n[i];
            e[i] = l ? l(e[i], t[i]) : t[i]
        }
    return e
}
const Xi = { data: Bs, props: nt, emits: nt, methods: nt, computed: nt, beforeCreate: ve, created: ve, beforeMount: ve, mounted: ve, beforeUpdate: ve, updated: ve, beforeDestroy: ve, beforeUnmount: ve, destroyed: ve, unmounted: ve, activated: ve, deactivated: ve, errorCaptured: ve, serverPrefetch: ve, components: nt, directives: nt, watch: Qi, provide: Bs, inject: Zi };

function Bs(e, t) { return t ? e ? function() { return ye(N(e) ? e.call(this, this) : e, N(t) ? t.call(this, this) : t) } : t : e }

function Zi(e, t) { return nt(Jn(e), Jn(t)) }

function Jn(e) { if (R(e)) { const t = {}; for (let n = 0; n < e.length; n++) t[e[n]] = e[n]; return t } return e }

function ve(e, t) { return e ? [...new Set([].concat(e, t))] : t }

function nt(e, t) { return e ? ye(ye(Object.create(null), e), t) : t }

function Qi(e, t) { if (!e) return t; if (!t) return e; const n = ye(Object.create(null), e); for (const s in t) n[s] = ve(e[s], t[s]); return n }

function Gi(e, t, n, s = !1) {
    const r = {},
        o = {};
    sn(o, Pn, 1), e.propsDefaults = Object.create(null), Qr(e, t, r, o);
    for (const i in e.propsOptions[0]) i in r || (r[i] = void 0);
    n ? e.props = s ? r : mi(r) : e.type.props ? e.props = r : e.props = o, e.attrs = o
}

function el(e, t, n, s) {
    const { props: r, attrs: o, vnode: { patchFlag: i } } = e, l = z(r), [c] = e.propsOptions;
    let f = !1;
    if ((s || i > 0) && !(i & 16)) {
        if (i & 8) {
            const h = e.vnode.dynamicProps;
            for (let g = 0; g < h.length; g++) {
                let x = h[g];
                if (kn(e.emitsOptions, x)) continue;
                const P = t[x];
                if (c)
                    if (K(o, x)) P !== o[x] && (o[x] = P, f = !0);
                    else {
                        const M = He(x);
                        r[M] = Yn(c, l, M, P, e, !1)
                    }
                else P !== o[x] && (o[x] = P, f = !0)
            }
        }
    } else {
        Qr(e, t, r, o) && (f = !0);
        let h;
        for (const g in l)(!t || !K(t, g) && ((h = xt(g)) === g || !K(t, h))) && (c ? n && (n[g] !== void 0 || n[h] !== void 0) && (r[g] = Yn(c, l, g, void 0, e, !0)) : delete r[g]);
        if (o !== l)
            for (const g in o)(!t || !K(t, g) && !0) && (delete o[g], f = !0)
    }
    f && Ke(e, "set", "$attrs")
}

function Qr(e, t, n, s) {
    const [r, o] = e.propsOptions;
    let i = !1,
        l;
    if (t)
        for (let c in t) {
            if (At(c)) continue;
            const f = t[c];
            let h;
            r && K(r, h = He(c)) ? !o || !o.includes(h) ? n[h] = f : (l || (l = {}))[h] = f : kn(e.emitsOptions, c) || (!(c in s) || f !== s[c]) && (s[c] = f, i = !0)
        }
    if (o) {
        const c = z(n),
            f = l || Q;
        for (let h = 0; h < o.length; h++) {
            const g = o[h];
            n[g] = Yn(r, c, g, f[g], e, !K(f, g))
        }
    }
    return i
}

function Yn(e, t, n, s, r, o) {
    const i = e[n];
    if (i != null) {
        const l = K(i, "default");
        if (l && s === void 0) {
            const c = i.default;
            if (i.type !== Function && N(c)) {
                const { propsDefaults: f } = r;
                n in f ? s = f[n] : (bt(r), s = f[n] = c.call(null, t), lt())
            } else s = c
        }
        i[0] && (o && !l ? s = !1 : i[1] && (s === "" || s === xt(n)) && (s = !0))
    }
    return s
}

function Gr(e, t, n = !1) {
    const s = t.propsCache,
        r = s.get(e);
    if (r) return r;
    const o = e.props,
        i = {},
        l = [];
    let c = !1;
    if (!N(e)) {
        const h = g => {
            c = !0;
            const [x, P] = Gr(g, t, !0);
            ye(i, x), P && l.push(...P)
        };
        !n && t.mixins.length && t.mixins.forEach(h), e.extends && h(e.extends), e.mixins && e.mixins.forEach(h)
    }
    if (!o && !c) return s.set(e, gt), gt;
    if (R(o))
        for (let h = 0; h < o.length; h++) {
            const g = He(o[h]);
            js(g) && (i[g] = Q)
        } else if (o)
            for (const h in o) {
                const g = He(h);
                if (js(g)) {
                    const x = o[h],
                        P = i[g] = R(x) || N(x) ? { type: x } : x;
                    if (P) {
                        const M = Ws(Boolean, P.type),
                            V = Ws(String, P.type);
                        P[0] = M > -1, P[1] = V < 0 || M < V, (M > -1 || K(P, "default")) && l.push(g)
                    }
                }
            }
    const f = [i, l];
    return s.set(e, f), f
}

function js(e) { return e[0] !== "$" }

function Ds(e) { const t = e && e.toString().match(/^\s*function (\w+)/); return t ? t[1] : e === null ? "null" : "" }

function Ks(e, t) { return Ds(e) === Ds(t) }

function Ws(e, t) { return R(t) ? t.findIndex(n => Ks(n, e)) : N(t) && Ks(t, e) ? 0 : -1 }
const eo = e => e[0] === "_" || e === "$stable",
    gs = e => R(e) ? e.map(Ae) : [Ae(e)],
    tl = (e, t, n) => { const s = je((...r) => gs(t(...r)), n); return s._c = !1, s },
    to = (e, t, n) => {
        const s = e._ctx;
        for (const r in e) {
            if (eo(r)) continue;
            const o = e[r];
            if (N(o)) t[r] = tl(r, o, s);
            else if (o != null) {
                const i = gs(o);
                t[r] = () => i
            }
        }
    },
    no = (e, t) => {
        const n = gs(t);
        e.slots.default = () => n
    },
    nl = (e, t) => {
        if (e.vnode.shapeFlag & 32) {
            const n = t._;
            n ? (e.slots = z(t), sn(t, "_", n)) : to(t, e.slots = {})
        } else e.slots = {}, t && no(e, t);
        sn(e.slots, Pn, 1)
    },
    sl = (e, t, n) => {
        const { vnode: s, slots: r } = e;
        let o = !0,
            i = Q;
        if (s.shapeFlag & 32) {
            const l = t._;
            l ? n && l === 1 ? o = !1 : (ye(r, t), !n && l === 1 && delete r._) : (o = !t.$stable, to(t, r)), i = t
        } else t && (no(e, t), i = { default: 1 });
        if (o)
            for (const l in r) !eo(l) && !(l in i) && delete r[l]
    };

function Ne(e, t, n, s) {
    const r = e.dirs,
        o = t && t.dirs;
    for (let i = 0; i < r.length; i++) {
        const l = r[i];
        o && (l.oldValue = o[i].value);
        let c = l.dir[s];
        c && (wt(), Re(c, n, 8, [e.el, l, e, t]), $t())
    }
}

function so() { return { app: null, config: { isNativeTag: Fo, performance: !1, globalProperties: {}, optionMergeStrategies: {}, errorHandler: void 0, warnHandler: void 0, compilerOptions: {} }, mixins: [], components: {}, directives: {}, provides: Object.create(null), optionsCache: new WeakMap, propsCache: new WeakMap, emitsCache: new WeakMap } }
let rl = 0;

function ol(e, t) {
    return function(s, r = null) {
        N(s) || (s = Object.assign({}, s)), r != null && !ae(r) && (r = null);
        const o = so(),
            i = new Set;
        let l = !1;
        const c = o.app = { _uid: rl++, _component: s, _props: r, _container: null, _context: o, _instance: null, version: El, get config() { return o.config }, set config(f) {}, use(f, ...h) { return i.has(f) || (f && N(f.install) ? (i.add(f), f.install(c, ...h)) : N(f) && (i.add(f), f(c, ...h))), c }, mixin(f) { return o.mixins.includes(f) || o.mixins.push(f), c }, component(f, h) { return h ? (o.components[f] = h, c) : o.components[f] }, directive(f, h) { return h ? (o.directives[f] = h, c) : o.directives[f] }, mount(f, h, g) { if (!l) { const x = H(s, r); return x.appContext = o, h && t ? t(x, f) : e(x, f, g), l = !0, c._container = f, f.__vue_app__ = c, bs(x.component) || x.component.proxy } }, unmount() { l && (e(null, c._container), delete c._container.__vue_app__) }, provide(f, h) { return o.provides[f] = h, c } };
        return c
    }
}

function un(e, t, n, s, r = !1) {
    if (R(e)) { e.forEach((x, P) => un(x, t && (R(t) ? t[P] : t), n, s, r)); return }
    if (jt(s) && !r) return;
    const o = s.shapeFlag & 4 ? bs(s.component) || s.component.proxy : s.el,
        i = r ? null : o,
        { i: l, r: c } = e,
        f = t && t.r,
        h = l.refs === Q ? l.refs = {} : l.refs,
        g = l.setupState;
    if (f != null && f !== c && (he(f) ? (h[f] = null, K(g, f) && (g[f] = null)) : de(f) && (f.value = null)), N(c)) Qe(c, l, 12, [i, h]);
    else {
        const x = he(c),
            P = de(c);
        if (x || P) {
            const M = () => {
                if (e.f) {
                    const V = x ? h[c] : c.value;
                    r ? R(V) && ss(V, o) : R(V) ? V.includes(o) || V.push(o) : x ? (h[c] = [o], K(g, c) && (g[c] = h[c])) : (c.value = [o], e.k && (h[e.k] = c.value))
                } else x ? (h[c] = i, K(g, c) && (g[c] = i)) : de(c) && (c.value = i, e.k && (h[e.k] = i))
            };
            i ? (M.id = -1, $e(M, n)) : M()
        }
    }
}
let Je = !1;
const en = e => /svg/.test(e.namespaceURI) && e.tagName !== "foreignObject",
    Nn = e => e.nodeType === 8;

function il(e) {
    const { mt: t, p: n, o: { patchProp: s, nextSibling: r, parentNode: o, remove: i, insert: l, createComment: c } } = e, f = (m, w) => {
        if (!w.hasChildNodes()) { n(null, m, w), on(); return }
        Je = !1, h(w.firstChild, m, null, null, null), on(), Je && console.error("Hydration completed but contains mismatches.")
    }, h = (m, w, W, I, U, X = !1) => {
        const Z = Nn(m) && m.data === "[",
            B = () => M(m, w, W, I, U, Z),
            { type: le, ref: ne, shapeFlag: re } = w,
            _e = m.nodeType;
        w.el = m;
        let D = null;
        switch (le) {
            case Dt:
                _e !== 3 ? D = B() : (m.data !== w.children && (Je = !0, m.data = w.children), D = r(m));
                break;
            case We:
                _e !== 8 || Z ? D = B() : D = r(m);
                break;
            case St:
                if (_e !== 1) D = B();
                else { D = m; const oe = !w.children.length; for (let xe = 0; xe < w.staticCount; xe++) oe && (w.children += D.outerHTML), xe === w.staticCount - 1 && (w.anchor = D), D = r(D); return D }
                break;
            case fe:
                Z ? D = P(m, w, W, I, U, X) : D = B();
                break;
            default:
                if (re & 1) _e !== 1 || w.type.toLowerCase() !== m.tagName.toLowerCase() ? D = B() : D = g(m, w, W, I, U, X);
                else if (re & 6) {
                    w.slotScopeIds = U;
                    const oe = o(m);
                    if (t(w, oe, null, W, I, en(oe), X), D = Z ? V(m) : r(m), jt(w)) {
                        let xe;
                        Z ? (xe = H(fe), xe.anchor = D ? D.previousSibling : oe.lastChild) : xe = m.nodeType === 3 ? zt("") : H("div"), xe.el = m, w.component.subTree = xe
                    }
                } else re & 64 ? _e !== 8 ? D = B() : D = w.type.hydrate(m, w, W, I, U, X, e, x) : re & 128 && (D = w.type.hydrate(m, w, W, I, en(o(m)), U, X, e, h))
        }
        return ne != null && un(ne, null, I, w), D
    }, g = (m, w, W, I, U, X) => {
        X = X || !!w.dynamicChildren;
        const { type: Z, props: B, patchFlag: le, shapeFlag: ne, dirs: re } = w, _e = Z === "input" && re || Z === "option";
        if (_e || le !== -1) {
            if (re && Ne(w, null, W, "created"), B)
                if (_e || !X || le & 48)
                    for (const oe in B)(_e && oe.endsWith("value") || qt(oe) && !At(oe)) && s(m, oe, null, B[oe], !1, void 0, W);
                else B.onClick && s(m, "onClick", null, B.onClick, !1, void 0, W);
            let D;
            if ((D = B && B.onVnodeBeforeMount) && Pe(D, W, w), re && Ne(w, null, W, "beforeMount"), ((D = B && B.onVnodeMounted) || re) && Wr(() => { D && Pe(D, W, w), re && Ne(w, null, W, "mounted") }, I), ne & 16 && !(B && (B.innerHTML || B.textContent))) {
                let oe = x(m.firstChild, w, m, W, I, U, X);
                for (; oe;) {
                    Je = !0;
                    const xe = oe;
                    oe = oe.nextSibling, i(xe)
                }
            } else ne & 8 && m.textContent !== w.children && (Je = !0, m.textContent = w.children)
        }
        return m.nextSibling
    }, x = (m, w, W, I, U, X, Z) => {
        Z = Z || !!w.dynamicChildren;
        const B = w.children,
            le = B.length;
        for (let ne = 0; ne < le; ne++) {
            const re = Z ? B[ne] : B[ne] = Ae(B[ne]);
            if (m) m = h(m, re, I, U, X, Z);
            else {
                if (re.type === Dt && !re.children) continue;
                Je = !0, n(null, re, W, null, I, U, en(W), X)
            }
        }
        return m
    }, P = (m, w, W, I, U, X) => {
        const { slotScopeIds: Z } = w;
        Z && (U = U ? U.concat(Z) : Z);
        const B = o(m),
            le = x(r(m), w, B, W, I, U, X);
        return le && Nn(le) && le.data === "]" ? r(w.anchor = le) : (Je = !0, l(w.anchor = c("]"), B, le), le)
    }, M = (m, w, W, I, U, X) => {
        if (Je = !0, w.el = null, X) {
            const le = V(m);
            for (;;) {
                const ne = r(m);
                if (ne && ne !== le) i(ne);
                else break
            }
        }
        const Z = r(m),
            B = o(m);
        return i(m), n(null, w, B, Z, W, I, en(B), U), Z
    }, V = m => {
        let w = 0;
        for (; m;)
            if (m = r(m), m && Nn(m) && (m.data === "[" && w++, m.data === "]")) {
                if (w === 0) return r(m);
                w--
            }
        return m
    };
    return [f, h]
}
const $e = Wr;

function ll(e) { return cl(e, il) }

function cl(e, t) {
    const n = Ko();
    n.__VUE__ = !0;
    const { insert: s, remove: r, patchProp: o, createElement: i, createText: l, createComment: c, setText: f, setElementText: h, parentNode: g, nextSibling: x, setScopeId: P = Me, cloneNode: M, insertStaticContent: V } = e, m = (u, a, d, _ = null, p = null, y = null, C = !1, b = null, $ = !!a.dynamicChildren) => {
        if (u === a) return;
        u && !Tt(u, a) && (_ = Jt(u), ze(u, p, y, !0), u = null), a.patchFlag === -2 && ($ = !1, a.dynamicChildren = null);
        const { type: v, ref: L, shapeFlag: E } = a;
        switch (v) {
            case Dt:
                w(u, a, d, _);
                break;
            case We:
                W(u, a, d, _);
                break;
            case St:
                u == null && I(a, d, _, C);
                break;
            case fe:
                oe(u, a, d, _, p, y, C, b, $);
                break;
            default:
                E & 1 ? Z(u, a, d, _, p, y, C, b, $) : E & 6 ? xe(u, a, d, _, p, y, C, b, $) : (E & 64 || E & 128) && v.process(u, a, d, _, p, y, C, b, $, ft)
        }
        L != null && p && un(L, u && u.ref, y, a || u, !a)
    }, w = (u, a, d, _) => {
        if (u == null) s(a.el = l(a.children), d, _);
        else {
            const p = a.el = u.el;
            a.children !== u.children && f(p, a.children)
        }
    }, W = (u, a, d, _) => { u == null ? s(a.el = c(a.children || ""), d, _) : a.el = u.el }, I = (u, a, d, _) => {
        [u.el, u.anchor] = V(u.children, a, d, _, u.el, u.anchor)
    }, U = ({ el: u, anchor: a }, d, _) => {
        let p;
        for (; u && u !== a;) p = x(u), s(u, d, _), u = p;
        s(a, d, _)
    }, X = ({ el: u, anchor: a }) => {
        let d;
        for (; u && u !== a;) d = x(u), r(u), u = d;
        r(a)
    }, Z = (u, a, d, _, p, y, C, b, $) => { C = C || a.type === "svg", u == null ? B(a, d, _, p, y, C, b, $) : re(u, a, p, y, C, b, $) }, B = (u, a, d, _, p, y, C, b) => {
        let $, v;
        const { type: L, props: E, shapeFlag: A, transition: O, patchFlag: q, dirs: te } = u;
        if (u.el && M !== void 0 && q === -1) $ = u.el = M(u.el);
        else {
            if ($ = u.el = i(u.type, y, E && E.is, E), A & 8 ? h($, u.children) : A & 16 && ne(u.children, $, null, _, p, y && L !== "foreignObject", C, b), te && Ne(u, null, _, "created"), E) { for (const ee in E) ee !== "value" && !At(ee) && o($, ee, null, E[ee], y, u.children, _, p, Be); "value" in E && o($, "value", null, E.value), (v = E.onVnodeBeforeMount) && Pe(v, _, u) }
            le($, u, u.scopeId, C, _)
        }
        te && Ne(u, null, _, "beforeMount");
        const Y = (!p || p && !p.pendingBranch) && O && !O.persisted;
        Y && O.beforeEnter($), s($, a, d), ((v = E && E.onVnodeMounted) || Y || te) && $e(() => { v && Pe(v, _, u), Y && O.enter($), te && Ne(u, null, _, "mounted") }, p)
    }, le = (u, a, d, _, p) => {
        if (d && P(u, d), _)
            for (let y = 0; y < _.length; y++) P(u, _[y]);
        if (p) {
            let y = p.subTree;
            if (a === y) {
                const C = p.vnode;
                le(u, C, C.scopeId, C.slotScopeIds, p.parent)
            }
        }
    }, ne = (u, a, d, _, p, y, C, b, $ = 0) => {
        for (let v = $; v < u.length; v++) {
            const L = u[v] = b ? Xe(u[v]) : Ae(u[v]);
            m(null, L, a, d, _, p, y, C, b)
        }
    }, re = (u, a, d, _, p, y, C) => {
        const b = a.el = u.el;
        let { patchFlag: $, dynamicChildren: v, dirs: L } = a;
        $ |= u.patchFlag & 16;
        const E = u.props || Q,
            A = a.props || Q;
        let O;
        d && tt(d, !1), (O = A.onVnodeBeforeUpdate) && Pe(O, d, a, u), L && Ne(a, u, d, "beforeUpdate"), d && tt(d, !0);
        const q = p && a.type !== "foreignObject";
        if (v ? _e(u.dynamicChildren, v, b, d, _, q, y) : C || Ue(u, a, b, null, d, _, q, y, !1), $ > 0) {
            if ($ & 16) D(b, a, E, A, d, _, p);
            else if ($ & 2 && E.class !== A.class && o(b, "class", null, A.class, p), $ & 4 && o(b, "style", E.style, A.style, p), $ & 8) {
                const te = a.dynamicProps;
                for (let Y = 0; Y < te.length; Y++) {
                    const ee = te[Y],
                        Le = E[ee],
                        dt = A[ee];
                    (dt !== Le || ee === "value") && o(b, ee, Le, dt, p, u.children, d, _, Be)
                }
            }
            $ & 1 && u.children !== a.children && h(b, a.children)
        } else !C && v == null && D(b, a, E, A, d, _, p);
        ((O = A.onVnodeUpdated) || L) && $e(() => { O && Pe(O, d, a, u), L && Ne(a, u, d, "updated") }, _)
    }, _e = (u, a, d, _, p, y, C) => {
        for (let b = 0; b < a.length; b++) {
            const $ = u[b],
                v = a[b],
                L = $.el && ($.type === fe || !Tt($, v) || $.shapeFlag & 70) ? g($.el) : d;
            m($, v, L, null, _, p, y, C, !0)
        }
    }, D = (u, a, d, _, p, y, C) => {
        if (d !== _) {
            for (const b in _) {
                if (At(b)) continue;
                const $ = _[b],
                    v = d[b];
                $ !== v && b !== "value" && o(u, b, v, $, C, a.children, p, y, Be)
            }
            if (d !== Q)
                for (const b in d) !At(b) && !(b in _) && o(u, b, d[b], null, C, a.children, p, y, Be);
            "value" in _ && o(u, "value", d.value, _.value)
        }
    }, oe = (u, a, d, _, p, y, C, b, $) => {
        const v = a.el = u ? u.el : l(""),
            L = a.anchor = u ? u.anchor : l("");
        let { patchFlag: E, dynamicChildren: A, slotScopeIds: O } = a;
        O && (b = b ? b.concat(O) : O), u == null ? (s(v, d, _), s(L, d, _), ne(a.children, d, L, p, y, C, b, $)) : E > 0 && E & 64 && A && u.dynamicChildren ? (_e(u.dynamicChildren, A, d, p, y, C, b), (a.key != null || p && a === p.subTree) && ro(u, a, !0)) : Ue(u, a, d, L, p, y, C, b, $)
    }, xe = (u, a, d, _, p, y, C, b, $) => { a.slotScopeIds = b, u == null ? a.shapeFlag & 512 ? p.ctx.activate(a, d, _, C, $) : An(a, d, _, p, y, C, $) : we(u, a, $) }, An = (u, a, d, _, p, y, C) => {
        const b = u.component = bl(u, _, p);
        if (Vr(u) && (b.ctx.renderer = ft), yl(b), b.asyncDep) {
            if (p && p.registerDep(b, se), !u.el) {
                const $ = b.subTree = H(We);
                W(null, $, a, d)
            }
            return
        }
        se(b, u, a, d, p, y, C)
    }, we = (u, a, d) => {
        const _ = a.component = u.component;
        if (Mi(u, a, d))
            if (_.asyncDep && !_.asyncResolved) { G(_, a, d); return } else _.next = a, Ti(_.update), _.update();
        else a.component = u.component, a.el = u.el, _.vnode = a
    }, se = (u, a, d, _, p, y, C) => {
        const b = () => {
                if (u.isMounted) {
                    let { next: L, bu: E, u: A, parent: O, vnode: q } = u, te = L, Y;
                    tt(u, !1), L ? (L.el = q.el, G(u, L, C)) : L = q, E && Sn(E), (Y = L.props && L.props.onVnodeBeforeUpdate) && Pe(Y, O, L, q), tt(u, !0);
                    const ee = Fn(u),
                        Le = u.subTree;
                    u.subTree = ee, m(Le, ee, g(Le.el), Jt(Le), u, p, y), L.el = ee.el, te === null && Ri(u, ee.el), A && $e(A, p), (Y = L.props && L.props.onVnodeUpdated) && $e(() => Pe(Y, O, L, q), p)
                } else {
                    let L;
                    const { el: E, props: A } = a, { bm: O, m: q, parent: te } = u, Y = jt(a);
                    if (tt(u, !1), O && Sn(O), !Y && (L = A && A.onVnodeBeforeMount) && Pe(L, te, a), tt(u, !0), E && Mn) {
                        const ee = () => { u.subTree = Fn(u), Mn(E, u.subTree, u, p, null) };
                        Y ? a.type.__asyncLoader().then(() => !u.isUnmounted && ee()) : ee()
                    } else {
                        const ee = u.subTree = Fn(u);
                        m(null, ee, d, _, u, p, y), a.el = ee.el
                    }
                    if (q && $e(q, p), !Y && (L = A && A.onVnodeMounted)) {
                        const ee = a;
                        $e(() => Pe(L, te, ee), p)
                    }
                    a.shapeFlag & 256 && u.a && $e(u.a, p), u.isMounted = !0, a = d = _ = null
                }
            },
            $ = u.effect = new ls(b, () => Nr(u.update), u.scope),
            v = u.update = $.run.bind($);
        v.id = u.uid, tt(u, !0), v()
    }, G = (u, a, d) => {
        a.component = u;
        const _ = u.vnode.props;
        u.vnode = a, u.next = null, el(u, a.props, _, d), sl(u, a.children, d), wt(), ps(void 0, u.update), $t()
    }, Ue = (u, a, d, _, p, y, C, b, $ = !1) => {
        const v = u && u.children,
            L = u ? u.shapeFlag : 0,
            E = a.children,
            { patchFlag: A, shapeFlag: O } = a;
        if (A > 0) { if (A & 128) { Ct(v, E, d, _, p, y, C, b, $); return } else if (A & 256) { In(v, E, d, _, p, y, C, b, $); return } }
        O & 8 ? (L & 16 && Be(v, p, y), E !== v && h(d, E)) : L & 16 ? O & 16 ? Ct(v, E, d, _, p, y, C, b, $) : Be(v, p, y, !0) : (L & 8 && h(d, ""), O & 16 && ne(E, d, _, p, y, C, b, $))
    }, In = (u, a, d, _, p, y, C, b, $) => {
        u = u || gt, a = a || gt;
        const v = u.length,
            L = a.length,
            E = Math.min(v, L);
        let A;
        for (A = 0; A < E; A++) {
            const O = a[A] = $ ? Xe(a[A]) : Ae(a[A]);
            m(u[A], O, d, null, p, y, C, b, $)
        }
        v > L ? Be(u, p, y, !0, !1, E) : ne(a, d, _, p, y, C, b, $, E)
    }, Ct = (u, a, d, _, p, y, C, b, $) => {
        let v = 0;
        const L = a.length;
        let E = u.length - 1,
            A = L - 1;
        for (; v <= E && v <= A;) {
            const O = u[v],
                q = a[v] = $ ? Xe(a[v]) : Ae(a[v]);
            if (Tt(O, q)) m(O, q, d, null, p, y, C, b, $);
            else break;
            v++
        }
        for (; v <= E && v <= A;) {
            const O = u[E],
                q = a[A] = $ ? Xe(a[A]) : Ae(a[A]);
            if (Tt(O, q)) m(O, q, d, null, p, y, C, b, $);
            else break;
            E--, A--
        }
        if (v > E) {
            if (v <= A) {
                const O = A + 1,
                    q = O < L ? a[O].el : _;
                for (; v <= A;) m(null, a[v] = $ ? Xe(a[v]) : Ae(a[v]), d, q, p, y, C, b, $), v++
            }
        } else if (v > A)
            for (; v <= E;) ze(u[v], p, y, !0), v++;
        else {
            const O = v,
                q = v,
                te = new Map;
            for (v = q; v <= A; v++) {
                const Ce = a[v] = $ ? Xe(a[v]) : Ae(a[v]);
                Ce.key != null && te.set(Ce.key, v)
            }
            let Y, ee = 0;
            const Le = A - q + 1;
            let dt = !1,
                Es = 0;
            const Et = new Array(Le);
            for (v = 0; v < Le; v++) Et[v] = 0;
            for (v = O; v <= E; v++) {
                const Ce = u[v];
                if (ee >= Le) { ze(Ce, p, y, !0); continue }
                let Se;
                if (Ce.key != null) Se = te.get(Ce.key);
                else
                    for (Y = q; Y <= A; Y++)
                        if (Et[Y - q] === 0 && Tt(Ce, a[Y])) { Se = Y; break }
                Se === void 0 ? ze(Ce, p, y, !0) : (Et[Se - q] = v + 1, Se >= Es ? Es = Se : dt = !0, m(Ce, a[Se], d, null, p, y, C, b, $), ee++)
            }
            const Ts = dt ? ul(Et) : gt;
            for (Y = Ts.length - 1, v = Le - 1; v >= 0; v--) {
                const Ce = q + v,
                    Se = a[Ce],
                    Ps = Ce + 1 < L ? a[Ce + 1].el : _;
                Et[v] === 0 ? m(null, Se, d, Ps, p, y, C, b, $) : dt && (Y < 0 || v !== Ts[Y] ? at(Se, d, Ps, 2) : Y--)
            }
        }
    }, at = (u, a, d, _, p = null) => {
        const { el: y, type: C, transition: b, children: $, shapeFlag: v } = u;
        if (v & 6) { at(u.component.subTree, a, d, _); return }
        if (v & 128) { u.suspense.move(a, d, _); return }
        if (v & 64) { C.move(u, a, d, ft); return }
        if (C === fe) {
            s(y, a, d);
            for (let E = 0; E < $.length; E++) at($[E], a, d, _);
            s(u.anchor, a, d);
            return
        }
        if (C === St) { U(u, a, d); return }
        if (_ !== 2 && v & 1 && b)
            if (_ === 0) b.beforeEnter(y), s(y, a, d), $e(() => b.enter(y), p);
            else {
                const { leave: E, delayLeave: A, afterLeave: O } = b, q = () => s(y, a, d), te = () => { E(y, () => { q(), O && O() }) };
                A ? A(y, q, te) : te()
            }
        else s(y, a, d)
    }, ze = (u, a, d, _ = !1, p = !1) => {
        const { type: y, props: C, ref: b, children: $, dynamicChildren: v, shapeFlag: L, patchFlag: E, dirs: A } = u;
        if (b != null && un(b, null, d, u, !0), L & 256) { a.ctx.deactivate(u); return }
        const O = L & 1 && A,
            q = !jt(u);
        let te;
        if (q && (te = C && C.onVnodeBeforeUnmount) && Pe(te, a, u), L & 6) To(u.component, d, _);
        else {
            if (L & 128) { u.suspense.unmount(d, _); return }
            O && Ne(u, null, a, "beforeUnmount"), L & 64 ? u.type.remove(u, a, d, p, ft, _) : v && (y !== fe || E > 0 && E & 64) ? Be(v, a, d, !1, !0) : (y === fe && E & 384 || !p && L & 16) && Be($, a, d), _ && ks(u)
        }(q && (te = C && C.onVnodeUnmounted) || O) && $e(() => { te && Pe(te, a, u), O && Ne(u, null, a, "unmounted") }, d)
    }, ks = u => {
        const { type: a, el: d, anchor: _, transition: p } = u;
        if (a === fe) { Eo(d, _); return }
        if (a === St) { X(u); return }
        const y = () => { r(d), p && !p.persisted && p.afterLeave && p.afterLeave() };
        if (u.shapeFlag & 1 && p && !p.persisted) {
            const { leave: C, delayLeave: b } = p, $ = () => C(d, y);
            b ? b(u.el, y, $) : $()
        } else y()
    }, Eo = (u, a) => {
        let d;
        for (; u !== a;) d = x(u), r(u), u = d;
        r(a)
    }, To = (u, a, d) => {
        const { bum: _, scope: p, update: y, subTree: C, um: b } = u;
        _ && Sn(_), p.stop(), y && (y.active = !1, ze(C, u, a, d)), b && $e(b, a), $e(() => { u.isUnmounted = !0 }, a), a && a.pendingBranch && !a.isUnmounted && u.asyncDep && !u.asyncResolved && u.suspenseId === a.pendingId && (a.deps--, a.deps === 0 && a.resolve())
    }, Be = (u, a, d, _ = !1, p = !1, y = 0) => { for (let C = y; C < u.length; C++) ze(u[C], a, d, _, p) }, Jt = u => u.shapeFlag & 6 ? Jt(u.component.subTree) : u.shapeFlag & 128 ? u.suspense.next() : x(u.anchor || u.el), Cs = (u, a, d) => { u == null ? a._vnode && ze(a._vnode, null, null, !0) : m(a._vnode || null, u, a, null, null, null, d), on(), a._vnode = u }, ft = { p: m, um: ze, m: at, r: ks, mt: An, mc: ne, pc: Ue, pbc: _e, n: Jt, o: e };
    let On, Mn;
    return t && ([On, Mn] = t(ft)), { render: Cs, hydrate: On, createApp: ol(Cs, On) }
}

function tt({ effect: e, update: t }, n) { e.allowRecurse = t.allowRecurse = n }

function ro(e, t, n = !1) {
    const s = e.children,
        r = t.children;
    if (R(s) && R(r))
        for (let o = 0; o < s.length; o++) {
            const i = s[o];
            let l = r[o];
            l.shapeFlag & 1 && !l.dynamicChildren && ((l.patchFlag <= 0 || l.patchFlag === 32) && (l = r[o] = Xe(r[o]), l.el = i.el), n || ro(i, l))
        }
}

function ul(e) {
    const t = e.slice(),
        n = [0];
    let s, r, o, i, l;
    const c = e.length;
    for (s = 0; s < c; s++) {
        const f = e[s];
        if (f !== 0) {
            if (r = n[n.length - 1], e[r] < f) { t[s] = r, n.push(s); continue }
            for (o = 0, i = n.length - 1; o < i;) l = o + i >> 1, e[n[l]] < f ? o = l + 1 : i = l;
            f < e[n[o]] && (o > 0 && (t[s] = n[o - 1]), n[o] = s)
        }
    }
    for (o = n.length, i = n[o - 1]; o-- > 0;) n[o] = i, i = t[i];
    return n
}
const al = e => e.__isTeleport,
    oo = "components";

function an(e, t) { return dl(oo, e, !0, t) || e }
const fl = Symbol();

function dl(e, t, n = !0, s = !1) { const r = ke || pe; if (r) { const o = r.type; if (e === oo) { const l = kl(o); if (l && (l === t || l === He(t) || l === bn(He(t)))) return o } const i = qs(r[e] || o[e], t) || qs(r.appContext[e], t); return !i && s ? o : i } }

function qs(e, t) { return e && (e[t] || e[He(t)] || e[bn(He(t))]) }
const fe = Symbol(void 0),
    Dt = Symbol(void 0),
    We = Symbol(void 0),
    St = Symbol(void 0),
    Ft = [];
let it = null;

function T(e = !1) { Ft.push(it = e ? null : []) }

function hl() { Ft.pop(), it = Ft[Ft.length - 1] || null }
let fn = 1;

function zs(e) { fn += e }

function io(e) { return e.dynamicChildren = fn > 0 ? it || gt : null, hl(), fn > 0 && it && it.push(e), e }

function S(e, t, n, s, r, o) { return io(F(e, t, n, s, r, o, !0)) }

function ge(e, t, n, s, r) { return io(H(e, t, n, s, r, !0)) }

function dn(e) { return e ? e.__v_isVNode === !0 : !1 }

function Tt(e, t) { return e.type === t.type && e.key === t.key }
const Pn = "__vInternal",
    lo = ({ key: e }) => e != null ? e : null,
    nn = ({ ref: e, ref_key: t, ref_for: n }) => e != null ? he(e) || de(e) || N(e) ? { i: ke, r: e, k: t, f: !!n } : e : null;

function F(e, t = null, n = null, s = 0, r = null, o = e === fe ? 0 : 1, i = !1, l = !1) { const c = { __v_isVNode: !0, __v_skip: !0, type: e, props: t, key: t && lo(t), ref: t && nn(t), scopeId: Cn, slotScopeIds: null, children: n, component: null, suspense: null, ssContent: null, ssFallback: null, dirs: null, transition: null, el: null, anchor: null, target: null, targetAnchor: null, staticCount: 0, shapeFlag: o, patchFlag: s, dynamicProps: r, dynamicChildren: null, appContext: null }; return l ? (ms(c, n), o & 128 && e.normalize(c)) : n && (c.shapeFlag |= he(n) ? 8 : 16), fn > 0 && !i && it && (c.patchFlag > 0 || o & 6) && c.patchFlag !== 32 && it.push(c), c }
const H = pl;

function pl(e, t = null, n = null, s = 0, r = null, o = !1) {
    if ((!e || e === fl) && (e = We), dn(e)) { const l = Kt(e, t, !0); return n && ms(l, n), l }
    if (Cl(e) && (e = e.__vccOpts), t) {
        t = _l(t);
        let { class: l, style: c } = t;
        l && !he(l) && (t.class = ct(l)), ae(c) && (Lr(c) && !R(c) && (c = ye({}, c)), t.style = ts(c))
    }
    const i = he(e) ? 1 : Si(e) ? 128 : al(e) ? 64 : ae(e) ? 4 : N(e) ? 2 : 0;
    return F(e, t, n, s, r, i, o, !0)
}

function _l(e) { return e ? Lr(e) || Pn in e ? ye({}, e) : e : null }

function Kt(e, t, n = !1) { const { props: s, ref: r, patchFlag: o, children: i } = e, l = t ? vs(s || {}, t) : s; return { __v_isVNode: !0, __v_skip: !0, type: e.type, props: l, key: l && lo(l), ref: t && t.ref ? n && r ? R(r) ? r.concat(nn(t)) : [r, nn(t)] : nn(t) : r, scopeId: e.scopeId, slotScopeIds: e.slotScopeIds, children: i, target: e.target, targetAnchor: e.targetAnchor, staticCount: e.staticCount, shapeFlag: e.shapeFlag, patchFlag: t && e.type !== fe ? o === -1 ? 16 : o | 16 : o, dynamicProps: e.dynamicProps, dynamicChildren: e.dynamicChildren, appContext: e.appContext, dirs: e.dirs, transition: e.transition, component: e.component, suspense: e.suspense, ssContent: e.ssContent && Kt(e.ssContent), ssFallback: e.ssFallback && Kt(e.ssFallback), el: e.el, anchor: e.anchor } }

function zt(e = " ", t = 0) { return H(Dt, null, e, t) }

function ef(e, t) { const n = H(St, null, e); return n.staticCount = t, n }

function J(e = "", t = !1) { return t ? (T(), ge(We, null, e)) : H(We, null, e) }

function Ae(e) { return e == null || typeof e == "boolean" ? H(We) : R(e) ? H(fe, null, e.slice()) : typeof e == "object" ? Xe(e) : H(Dt, null, String(e)) }

function Xe(e) { return e.el === null || e.memo ? e : Kt(e) }

function ms(e, t) {
    let n = 0;
    const { shapeFlag: s } = e;
    if (t == null) t = null;
    else if (R(t)) n = 16;
    else if (typeof t == "object")
        if (s & 65) {
            const r = t.default;
            r && (r._c && (r._d = !1), ms(e, r()), r._c && (r._d = !0));
            return
        } else { n = 32; const r = t._;!r && !(Pn in t) ? t._ctx = ke : r === 3 && ke && (ke.slots._ === 1 ? t._ = 1 : (t._ = 2, e.patchFlag |= 1024)) }
    else N(t) ? (t = { default: t, _ctx: ke }, n = 32) : (t = String(t), s & 64 ? (n = 16, t = [zt(t)]) : n = 8);
    e.children = t, e.shapeFlag |= n
}

function vs(...e) {
    const t = {};
    for (let n = 0; n < e.length; n++) {
        const s = e[n];
        for (const r in s)
            if (r === "class") t.class !== s.class && (t.class = ct([t.class, s.class]));
            else if (r === "style") t.style = ts([t.style, s.style]);
        else if (qt(r)) {
            const o = t[r],
                i = s[r];
            i && o !== i && !(R(o) && o.includes(i)) && (t[r] = o ? [].concat(o, i) : i)
        } else r !== "" && (t[r] = s[r])
    }
    return t
}

function Pe(e, t, n, s = null) { Re(e, t, 7, [n, s]) }

function Ln(e, t, n, s) {
    let r;
    const o = n && n[s];
    if (R(e) || he(e)) { r = new Array(e.length); for (let i = 0, l = e.length; i < l; i++) r[i] = t(e[i], i, void 0, o && o[i]) } else if (typeof e == "number") { r = new Array(e); for (let i = 0; i < e; i++) r[i] = t(i + 1, i, void 0, o && o[i]) } else if (ae(e))
        if (e[Symbol.iterator]) r = Array.from(e, (i, l) => t(i, l, void 0, o && o[l]));
        else {
            const i = Object.keys(e);
            r = new Array(i.length);
            for (let l = 0, c = i.length; l < c; l++) {
                const f = i[l];
                r[l] = t(e[f], f, l, o && o[l])
            }
        }
    else r = [];
    return n && (n[s] = r), r
}

function ue(e, t, n = {}, s, r) {
    if (ke.isCE || ke.parent && jt(ke.parent) && ke.parent.isCE) return H("slot", t === "default" ? null : { name: t }, s && s());
    let o = e[t];
    o && o._c && (o._d = !1), T();
    const i = o && co(o(n)),
        l = ge(fe, { key: n.key || `_${t}` }, i || (s ? s() : []), i && e._ === 1 ? 64 : -2);
    return !r && l.scopeId && (l.slotScopeIds = [l.scopeId + "-s"]), o && o._c && (o._d = !0), l
}

function co(e) { return e.some(t => dn(t) ? !(t.type === We || t.type === fe && !co(t.children)) : !0) ? e : null }
const Xn = e => e ? uo(e) ? bs(e) || e.proxy : Xn(e.parent) : null,
    hn = ye(Object.create(null), { $: e => e, $el: e => e.vnode.el, $data: e => e.data, $props: e => e.props, $attrs: e => e.attrs, $slots: e => e.slots, $refs: e => e.refs, $parent: e => Xn(e.parent), $root: e => Xn(e.root), $emit: e => e.emit, $options: e => Zr(e), $forceUpdate: e => () => Nr(e.update), $nextTick: e => Fr.bind(e.proxy), $watch: e => Ni.bind(e) }),
    gl = {get({ _: e }, t) {
            const { ctx: n, setupState: s, data: r, props: o, accessCache: i, type: l, appContext: c } = e;
            let f;
            if (t[0] !== "$") {
                const P = i[t];
                if (P !== void 0) switch (P) {
                    case 1:
                        return s[t];
                    case 2:
                        return r[t];
                    case 4:
                        return n[t];
                    case 3:
                        return o[t]
                } else {
                    if (s !== Q && K(s, t)) return i[t] = 1, s[t];
                    if (r !== Q && K(r, t)) return i[t] = 2, r[t];
                    if ((f = e.propsOptions[0]) && K(f, t)) return i[t] = 3, o[t];
                    if (n !== Q && K(n, t)) return i[t] = 4, n[t];
                    Vn && (i[t] = 0)
                }
            }
            const h = hn[t];
            let g, x;
            if (h) return t === "$attrs" && Te(e, "get", t), h(e);
            if ((g = l.__cssModules) && (g = g[t])) return g;
            if (n !== Q && K(n, t)) return i[t] = 4, n[t];
            if (x = c.config.globalProperties, K(x, t)) return x[t]
        },
        set({ _: e }, t, n) { const { data: s, setupState: r, ctx: o } = e; return r !== Q && K(r, t) ? (r[t] = n, !0) : s !== Q && K(s, t) ? (s[t] = n, !0) : K(e.props, t) || t[0] === "$" && t.slice(1) in e ? !1 : (o[t] = n, !0) },
        has({ _: { data: e, setupState: t, accessCache: n, ctx: s, appContext: r, propsOptions: o } }, i) { let l; return !!n[i] || e !== Q && K(e, i) || t !== Q && K(t, i) || (l = o[0]) && K(l, i) || K(s, i) || K(hn, i) || K(r.config.globalProperties, i) },
        defineProperty(e, t, n) { return n.get != null ? e._.accessCache[t] = 0 : K(n, "value") && this.set(e, t, n.value, null), Reflect.defineProperty(e, t, n) }
    },
    ml = so();
let vl = 0;

function bl(e, t, n) {
    const s = e.type,
        r = (t ? t.appContext : e.appContext) || ml,
        o = { uid: vl++, vnode: e, type: s, parent: t, appContext: r, root: null, next: null, subTree: null, effect: null, update: null, scope: new Wo(!0), render: null, proxy: null, exposed: null, exposeProxy: null, withProxy: null, provides: t ? t.provides : Object.create(r.provides), accessCache: null, renderCache: [], components: null, directives: null, propsOptions: Gr(s, r), emitsOptions: jr(s, r), emit: null, emitted: null, propsDefaults: Q, inheritAttrs: s.inheritAttrs, ctx: Q, data: Q, props: Q, attrs: Q, slots: Q, refs: Q, setupState: Q, setupContext: null, suspense: n, suspenseId: n ? n.pendingId : 0, asyncDep: null, asyncResolved: !1, isMounted: !1, isUnmounted: !1, isDeactivated: !1, bc: null, c: null, bm: null, m: null, bu: null, u: null, um: null, bum: null, da: null, a: null, rtg: null, rtc: null, ec: null, sp: null };
    return o.ctx = { _: o }, o.root = t ? t.root : o, o.emit = Ai.bind(null, o), e.ce && e.ce(o), o
}
let pe = null;
const bt = e => { pe = e, e.scope.on() },
    lt = () => { pe && pe.scope.off(), pe = null };

function uo(e) { return e.vnode.shapeFlag & 4 }
let Wt = !1;

function yl(e, t = !1) {
    Wt = t;
    const { props: n, children: s } = e.vnode, r = uo(e);
    Gi(e, n, r, t), nl(e, s);
    const o = r ? xl(e, t) : void 0;
    return Wt = !1, o
}

function xl(e, t) {
    const n = e.type;
    e.accessCache = Object.create(null), e.proxy = It(new Proxy(e.ctx, gl));
    const { setup: s } = n;
    if (s) {
        const r = e.setupContext = s.length > 1 ? $l(e) : null;
        bt(e), wt();
        const o = Qe(s, e, 0, [e.props, r]);
        if ($t(), lt(), pr(o)) {
            if (o.then(lt, lt), t) return o.then(i => { Vs(e, i, t) }).catch(i => { $n(i, e, 0) });
            e.asyncDep = o
        } else Vs(e, o, t)
    } else ao(e, t)
}

function Vs(e, t, n) { N(t) ? e.type.__ssrInlineRender ? e.ssrRender = t : e.render = t : ae(t) && (e.setupState = Mr(t)), ao(e, n) }
let Js;

function ao(e, t, n) {
    const s = e.type;
    if (!e.render) {
        if (!t && Js && !s.render) {
            const r = s.template;
            if (r) {
                const { isCustomElement: o, compilerOptions: i } = e.appContext.config, { delimiters: l, compilerOptions: c } = s, f = ye(ye({ isCustomElement: o, delimiters: l }, i), c);
                s.render = Js(r, f)
            }
        }
        e.render = s.render || Me
    }
    bt(e), wt(), Ji(e), $t(), lt()
}

function wl(e) { return new Proxy(e.attrs, {get(t, n) { return Te(e, "get", "$attrs"), t[n] } }) }

function $l(e) { const t = s => { e.exposed = s || {} }; let n; return {get attrs() { return n || (n = wl(e)) }, slots: e.slots, emit: e.emit, expose: t } }

function bs(e) { if (e.exposed) return e.exposeProxy || (e.exposeProxy = new Proxy(Mr(It(e.exposed)), {get(t, n) { if (n in t) return t[n]; if (n in hn) return hn[n](e) } })) }

function kl(e) { return N(e) && e.displayName || e.name }

function Cl(e) { return N(e) && "__vccOpts" in e }
const j = (e, t) => ki(e, t, Wt);

function ut(e, t, n) { const s = arguments.length; return s === 2 ? ae(t) && !R(t) ? dn(t) ? H(e, null, [t]) : H(e, t) : H(e, null, t) : (s > 3 ? n = Array.prototype.slice.call(arguments, 2) : s === 3 && dn(n) && (n = [n]), H(e, t, n)) }
const El = "3.2.33",
    Tl = "http://www.w3.org/2000/svg",
    st = typeof document != "undefined" ? document : null,
    Ys = st && st.createElement("template"),
    Pl = {
        insert: (e, t, n) => { t.insertBefore(e, n || null) },
        remove: e => {
            const t = e.parentNode;
            t && t.removeChild(e)
        },
        createElement: (e, t, n, s) => { const r = t ? st.createElementNS(Tl, e) : st.createElement(e, n ? { is: n } : void 0); return e === "select" && s && s.multiple != null && r.setAttribute("multiple", s.multiple), r },
        createText: e => st.createTextNode(e),
        createComment: e => st.createComment(e),
        setText: (e, t) => { e.nodeValue = t },
        setElementText: (e, t) => { e.textContent = t },
        parentNode: e => e.parentNode,
        nextSibling: e => e.nextSibling,
        querySelector: e => st.querySelector(e),
        setScopeId(e, t) { e.setAttribute(t, "") },
        cloneNode(e) { const t = e.cloneNode(!0); return "_value" in e && (t._value = e._value), t },
        insertStaticContent(e, t, n, s, r, o) {
            const i = n ? n.previousSibling : t.lastChild;
            if (r && (r === o || r.nextSibling))
                for (; t.insertBefore(r.cloneNode(!0), n), !(r === o || !(r = r.nextSibling)););
            else {
                Ys.innerHTML = s ? `<svg>${e}</svg>` : e;
                const l = Ys.content;
                if (s) {
                    const c = l.firstChild;
                    for (; c.firstChild;) l.appendChild(c.firstChild);
                    l.removeChild(c)
                }
                t.insertBefore(l, n)
            }
            return [i ? i.nextSibling : t.firstChild, n ? n.previousSibling : t.lastChild]
        }
    };

function Ll(e, t, n) {
    const s = e._vtc;
    s && (t = (t ? [t, ...s] : [...s]).join(" ")), t == null ? e.removeAttribute("class") : n ? e.setAttribute("class", t) : e.className = t
}

function Al(e, t, n) {
    const s = e.style,
        r = he(n);
    if (n && !r) {
        for (const o in n) Zn(s, o, n[o]);
        if (t && !he(t))
            for (const o in t) n[o] == null && Zn(s, o, "")
    } else {
        const o = s.display;
        r ? t !== n && (s.cssText = n) : t && e.removeAttribute("style"), "_vod" in e && (s.display = o)
    }
}
const Xs = /\s*!important$/;

function Zn(e, t, n) {
    if (R(n)) n.forEach(s => Zn(e, t, s));
    else if (n == null && (n = ""), t.startsWith("--")) e.setProperty(t, n);
    else {
        const s = Il(e, t);
        Xs.test(n) ? e.setProperty(xt(s), n.replace(Xs, ""), "important") : e[s] = n
    }
}
const Zs = ["Webkit", "Moz", "ms"],
    Hn = {};

function Il(e, t) {
    const n = Hn[t];
    if (n) return n;
    let s = He(t);
    if (s !== "filter" && s in e) return Hn[t] = s;
    s = bn(s);
    for (let r = 0; r < Zs.length; r++) { const o = Zs[r] + s; if (o in e) return Hn[t] = o }
    return t
}
const Qs = "http://www.w3.org/1999/xlink";

function Ol(e, t, n, s, r) {
    if (s && t.startsWith("xlink:")) n == null ? e.removeAttributeNS(Qs, t.slice(6, t.length)) : e.setAttributeNS(Qs, t, n);
    else {
        const o = Oo(t);
        n == null || o && !fr(n) ? e.removeAttribute(t) : e.setAttribute(t, o ? "" : n)
    }
}

function Ml(e, t, n, s, r, o, i) {
    if (t === "innerHTML" || t === "textContent") { s && i(s, r, o), e[t] = n == null ? "" : n; return }
    if (t === "value" && e.tagName !== "PROGRESS" && !e.tagName.includes("-")) {
        e._value = n;
        const c = n == null ? "" : n;
        (e.value !== c || e.tagName === "OPTION") && (e.value = c), n == null && e.removeAttribute(t);
        return
    }
    let l = !1;
    if (n === "" || n == null) {
        const c = typeof e[t];
        c === "boolean" ? n = fr(n) : n == null && c === "string" ? (n = "", l = !0) : c === "number" && (n = 0, l = !0)
    }
    try { e[t] = n } catch {}
    l && e.removeAttribute(t)
}
const [fo, Rl] = (() => {
    let e = Date.now,
        t = !1;
    if (typeof window != "undefined") {
        Date.now() > document.createEvent("Event").timeStamp && (e = () => performance.now());
        const n = navigator.userAgent.match(/firefox\/(\d+)/i);
        t = !!(n && Number(n[1]) <= 53)
    }
    return [e, t]
})();
let Qn = 0;
const Sl = Promise.resolve(),
    Fl = () => { Qn = 0 },
    Nl = () => Qn || (Sl.then(Fl), Qn = fo());

function Hl(e, t, n, s) { e.addEventListener(t, n, s) }

function Ul(e, t, n, s) { e.removeEventListener(t, n, s) }

function Bl(e, t, n, s, r = null) {
    const o = e._vei || (e._vei = {}),
        i = o[t];
    if (s && i) i.value = s;
    else {
        const [l, c] = jl(t);
        if (s) {
            const f = o[t] = Dl(s, r);
            Hl(e, l, f, c)
        } else i && (Ul(e, l, i, c), o[t] = void 0)
    }
}
const Gs = /(?:Once|Passive|Capture)$/;

function jl(e) { let t; if (Gs.test(e)) { t = {}; let n; for (; n = e.match(Gs);) e = e.slice(0, e.length - n[0].length), t[n[0].toLowerCase()] = !0 } return [xt(e.slice(2)), t] }

function Dl(e, t) {
    const n = s => {
        const r = s.timeStamp || fo();
        (Rl || r >= n.attached - 1) && Re(Kl(s, n.value), t, 5, [s])
    };
    return n.value = e, n.attached = Nl(), n
}

function Kl(e, t) { if (R(t)) { const n = e.stopImmediatePropagation; return e.stopImmediatePropagation = () => { n.call(e), e._stopped = !0 }, t.map(s => r => !r._stopped && s && s(r)) } else return t }
const er = /^on[a-z]/,
    Wl = (e, t, n, s, r = !1, o, i, l, c) => { t === "class" ? Ll(e, s, r) : t === "style" ? Al(e, n, s) : qt(t) ? ns(t) || Bl(e, t, n, s, i) : (t[0] === "." ? (t = t.slice(1), !0) : t[0] === "^" ? (t = t.slice(1), !1) : ql(e, t, s, r)) ? Ml(e, t, s, o, i, l, c) : (t === "true-value" ? e._trueValue = s : t === "false-value" && (e._falseValue = s), Ol(e, t, s, r)) };

function ql(e, t, n, s) { return s ? !!(t === "innerHTML" || t === "textContent" || t in e && er.test(t) && N(n)) : t === "spellcheck" || t === "draggable" || t === "translate" || t === "form" || t === "list" && e.tagName === "INPUT" || t === "type" && e.tagName === "TEXTAREA" || er.test(t) && he(n) ? !1 : t in e }
const zl = ye({ patchProp: Wl }, Pl);
let Un, tr = !1;

function Vl() { return Un = tr ? Un : ll(zl), tr = !0, Un }
const Jl = (...e) => {
    const t = Vl().createApp(...e),
        { mount: n } = t;
    return t.mount = s => { const r = Yl(s); if (r) return n(r, !0, r instanceof SVGElement) }, t
};

function Yl(e) { return he(e) ? document.querySelector(e) : e }
var Xl = '{"lang":"en-US","title":"payment api","description":"payment api for your site :)","base":"/new-docs/","head":[],"themeConfig":{"logo":"/logo.svg","nav":[{"text":"Home","link":"/"},{"text":"Testing card","link":"/card/"},{"text":"Checkout","link":"/checkout"}],"sidebar":[{"text":"Home","link":"/"},{"text":"Checkout","link":"/checkout"},{"text":"Card","link":"/card"}]},"locales":{},"langs":{},"scrollOffset":90}';
const ho = /^https?:/i,
    Oe = typeof window != "undefined";

function Zl(e, t) {
    t.sort((n, s) => { const r = s.split("/").length - n.split("/").length; return r !== 0 ? r : s.length - n.length });
    for (const n of t)
        if (e.startsWith(n)) return n
}

function nr(e, t) { const n = Zl(t, Object.keys(e)); return n ? e[n] : void 0 }

function Ql(e) { const { locales: t } = e.themeConfig || {}, n = e.locales; return t && n ? Object.keys(t).reduce((s, r) => (s[r] = { label: t[r].label, lang: n[r].lang }, s), {}) : {} }

function Gl(e, t) {
    t = ec(e, t);
    const n = nr(e.locales || {}, t),
        s = nr(e.themeConfig.locales || {}, t);
    return Object.assign({}, e, n, { themeConfig: Object.assign({}, e.themeConfig, s, { locales: {} }), lang: (n || e).lang, locales: {}, langs: Ql(e) })
}

function ec(e, t) {
    if (!Oe) return t;
    const n = e.base,
        s = n.endsWith("/") ? n.slice(0, -1) : n;
    return t.slice(s.length)
}
const po = Symbol(),
    Vt = vi(tc(Xl));

function tc(e) { return JSON.parse(e) }

function nc(e) { const t = j(() => Gl(Vt.value, e.path)); return { site: t, theme: j(() => t.value.themeConfig), page: j(() => e.data), frontmatter: j(() => e.data.frontmatter), lang: j(() => t.value.lang), localePath: j(() => { const { langs: n, lang: s } = t.value, r = Object.keys(n).find(o => n[o].lang === s); return yt(r || "/") }), title: j(() => e.data.title ? e.data.title + " | " + t.value.title : t.value.title), description: j(() => e.data.description || t.value.description) } }

function me() { const e = Rt(po); if (!e) throw new Error("vitepress data not properly injected in app"); return e }

function sc(e, t) { return `${e}${t}`.replace(/\/+/g, "/") }

function yt(e) { return ho.test(e) ? e : sc(Vt.value.base, e) }

function _o(e) {
    let t = e.replace(/\.html$/, "");
    if (t = decodeURIComponent(t), t.endsWith("/") && (t += "index"), Oe) {
        const n = "/new-docs/";
        t = t.slice(n.length).replace(/\//g, "_") + ".md";
        const s = __VP_HASH_MAP__[t.toLowerCase()];
        t = `${n}assets/${t}.${s}.js`
    } else t = `./${t.slice(1).replace(/\//g,"_")}.md.js`;
    return t
}
const go = Symbol(),
    sr = "http://a.com",
    mo = { relativePath: "", title: "404", description: "Not Found", headers: [], frontmatter: {}, lastUpdated: 0 },
    rc = () => ({ path: "/", component: null, data: mo });

function oc(e, t) {
    const n = xn(rc());

    function s(i = Oe ? location.href : "/") { const l = new URL(i, sr); return !l.pathname.endsWith("/") && !l.pathname.endsWith(".html") && (l.pathname += ".html", i = l.pathname + l.search + l.hash), Oe && (history.replaceState({ scrollPosition: window.scrollY }, document.title), history.pushState(null, "", i)), o(i) }
    let r = null;
    async function o(i, l = 0, c = !1) {
        const f = new URL(i, sr),
            h = r = f.pathname;
        try {
            let g = e(h);
            if ("then" in g && typeof g.then == "function" && (g = await g), r === h) {
                r = null;
                const { default: x, __pageData: P } = g;
                if (!x) throw new Error(`Invalid route component: ${x}`);
                n.path = h, n.component = It(x), n.data = It(JSON.parse(P)), Oe && Fr(() => {
                    if (f.hash && !l) { let M = null; try { M = document.querySelector(decodeURIComponent(f.hash)) } catch (V) { console.warn(V) } if (M) { rr(M, f.hash); return } }
                    window.scrollTo(0, l)
                })
            }
        } catch (g) {
            if (g.message.match(/fetch/) || console.error(g), !c) try {
                const x = await fetch(Vt.value.base + "hashmap.json");
                window.__VP_HASH_MAP__ = await x.json(), await o(i, l, !0);
                return
            } catch {}
            r === h && (r = null, n.path = h, n.component = t ? It(t) : null, n.data = mo)
        }
    }
    return Oe && (window.addEventListener("click", i => { const l = i.target.closest("a"); if (l) { const { href: c, protocol: f, hostname: h, pathname: g, hash: x, target: P } = l, M = window.location, V = g.match(/\.\w+$/);!i.ctrlKey && !i.shiftKey && !i.altKey && !i.metaKey && P !== "_blank" && f === M.protocol && h === M.hostname && !(V && V[0] !== ".html") && (i.preventDefault(), g === M.pathname ? x && x !== M.hash && (history.pushState(null, "", x), window.dispatchEvent(new Event("hashchange")), rr(l, x, l.classList.contains("header-anchor"))) : s(c)) } }, { capture: !0 }), window.addEventListener("popstate", i => { o(location.href, i.state && i.state.scrollPosition || 0) }), window.addEventListener("hashchange", i => { i.preventDefault() })), { route: n, go: s }
}

function ic() { const e = Rt(go); if (!e) throw new Error("useRouter() is called without provider."); return e }

function et() { return ic().route }

function rr(e, t, n = !1) {
    let s = null;
    try { s = e.classList.contains("header-anchor") ? e : document.querySelector(decodeURIComponent(t)) } catch (r) { console.warn(r) }
    if (s) {
        let r = Vt.value.scrollOffset;
        typeof r == "string" && (r = document.querySelector(r).getBoundingClientRect().bottom + 24);
        const o = parseInt(window.getComputedStyle(s).paddingTop, 10),
            i = window.scrollY + s.getBoundingClientRect().top - r + o;
        !n || Math.abs(i - window.scrollY) > window.innerHeight ? window.scrollTo(0, i) : window.scrollTo({ left: 0, top: i, behavior: "smooth" })
    }
}

function lc(e, t) {
    let n = [],
        s = !0;
    const r = o => {
        if (s) { s = !1; return }
        const i = [],
            l = Math.min(n.length, o.length);
        for (let c = 0; c < l; c++) {
            let f = n[c];
            const [h, g, x = ""] = o[c];
            if (f.tagName.toLocaleLowerCase() === h) {
                for (const P in g) f.getAttribute(P) !== g[P] && f.setAttribute(P, g[P]);
                for (let P = 0; P < f.attributes.length; P++) {
                    const M = f.attributes[P].name;
                    M in g || f.removeAttribute(M)
                }
                f.innerHTML !== x && (f.innerHTML = x)
            } else document.head.removeChild(f), f = or(o[c]), document.head.append(f);
            i.push(f)
        }
        n.slice(l).forEach(c => document.head.removeChild(c)), o.slice(l).forEach(c => {
            const f = or(c);
            document.head.appendChild(f), i.push(f)
        }), n = i
    };
    qr(() => {
        const o = e.data,
            i = t.value,
            l = o && o.title,
            c = o && o.description,
            f = o && o.frontmatter.head;
        document.title = (l ? l + " | " : "") + i.title, document.querySelector("meta[name=description]").setAttribute("content", c || i.description), r([...f ? uc(f) : []])
    })
}

function or([e, t, n]) { const s = document.createElement(e); for (const r in t) s.setAttribute(r, t[r]); return n && (s.innerHTML = n), s }

function cc(e) { return e[0] === "meta" && e[1] && e[1].name === "description" }

function uc(e) { return e.filter(t => !cc(t)) }
const ac = ie({ name: "VitePressContent", setup() { const e = et(); return () => ut("div", { style: { position: "relative" } }, [e.component ? ut(e.component) : null]) } });
var ce = (e, t) => { const n = e.__vccOpts || e; for (const [s, r] of t) n[s] = r; return n };
const fc = /#.*$/,
    dc = /(index)?\.(md|html)$/,
    pn = /\/$/,
    hc = /^[a-z]+:/i;

function ys(e) { return Array.isArray(e) }

function xs(e) { return hc.test(e) }

function pc(e, t) {
    if (t === void 0) return !1;
    const n = ir(`/${e.data.relativePath}`),
        s = ir(t);
    return n === s
}

function ir(e) { return decodeURI(e).replace(fc, "").replace(dc, "") }

function _c(e, t) {
    const n = e.endsWith("/"),
        s = t.startsWith("/");
    return n && s ? e.slice(0, -1) + t : !n && !s ? `${e}/${t}` : e + t
}

function Gn(e) { return /^\//.test(e) ? e : `/${e}` }

function vo(e) { return e.replace(/(index)?(\.(md|html))?$/, "") || "/" }

function gc(e) { return e === !1 || e === "auto" || ys(e) }

function mc(e) { return e.children !== void 0 }

function vc(e) { return ys(e) ? e.length === 0 : !e }

function ws(e, t) {
    if (gc(e)) return e;
    t = Gn(t);
    for (const n in e)
        if (t.startsWith(Gn(n))) return e[n];
    return "auto"
}

function bo(e) { return e.reduce((t, n) => (n.link && t.push({ text: n.text, link: vo(n.link) }), mc(n) && (t = [...t, ...bo(n.children)]), t), []) }

function yo(e) {
    const t = et(),
        n = xs(e.value.link);
    return {
        props: j(() => {
            const r = lr(`/${t.data.relativePath}`);
            let o = !1;
            if (e.value.activeMatch) o = new RegExp(e.value.activeMatch).test(r);
            else {
                const i = lr(e.value.link);
                o = i === "/" ? i === r : r.startsWith(i)
            }
            return { class: { active: o, isExternal: n }, href: n ? e.value.link : yt(e.value.link), target: e.value.target || (n ? "_blank" : null), rel: e.value.rel || (n ? "noopener noreferrer" : null), "aria-label": e.value.ariaLabel }
        }),
        isExternal: n
    }
}

function lr(e) { return e.replace(/#.*$/, "").replace(/\?.*$/, "").replace(/\.(html|md)$/, "").replace(/\/index$/, "/") }
const bc = {},
    yc = { class: "icon outbound", xmlns: "http://www.w3.org/2000/svg", "aria-hidden": "true", x: "0px", y: "0px", viewBox: "0 0 100 100", width: "15", height: "15" },
    xc = F("path", { fill: "currentColor", d: "M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z" }, null, -1),
    wc = F("polygon", { fill: "currentColor", points: "45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9" }, null, -1),
    $c = [xc, wc];

function kc(e, t) { return T(), S("svg", yc, $c) }
var $s = ce(bc, [
    ["render", kc]
]);
const Cc = { class: "nav-link" },
    Ec = ie({
        props: { item: null },
        setup(e) {
            const n = Rr(e),
                { props: s, isExternal: r } = yo(n.item);
            return (o, i) => (T(), S("div", Cc, [F("a", vs({ class: "item" }, k(s)), [zt(be(e.item.text) + " ", 1), k(r) ? (T(), ge($s, { key: 0 })) : J("", !0)], 16)]))
        }
    });
var _n = ce(Ec, [
    ["__scopeId", "data-v-b762180a"]
]);
const Tc = { key: 0, class: "home-hero" },
    Pc = { key: 0, class: "figure" },
    Lc = ["src", "alt"],
    Ac = { key: 1, id: "main-title", class: "title" },
    Ic = { key: 2, class: "tagline" },
    Oc = ie({ setup(e) { const { site: t, frontmatter: n } = me(), s = j(() => { const { heroImage: i, heroText: l, tagline: c, actionLink: f, actionText: h } = n.value; return i || l || c || f && h }), r = j(() => n.value.heroText || t.value.title), o = j(() => n.value.tagline || t.value.description); return (i, l) => k(s) ? (T(), S("header", Tc, [k(n).heroImage ? (T(), S("figure", Pc, [F("img", { class: "image", src: k(yt)(k(n).heroImage), alt: k(n).heroAlt }, null, 8, Lc)])) : J("", !0), k(r) ? (T(), S("h1", Ac, be(k(r)), 1)) : J("", !0), k(o) ? (T(), S("p", Ic, be(k(o)), 1)) : J("", !0), k(n).actionLink && k(n).actionText ? (T(), ge(_n, { key: 3, item: { link: k(n).actionLink, text: k(n).actionText }, class: "action" }, null, 8, ["item"])) : J("", !0), k(n).altActionLink && k(n).altActionText ? (T(), ge(_n, { key: 4, item: { link: k(n).altActionLink, text: k(n).altActionText }, class: "action alt" }, null, 8, ["item"])) : J("", !0)])) : J("", !0) } });
var Mc = ce(Oc, [
    ["__scopeId", "data-v-d2d4abc2"]
]);
const Rc = { key: 0, class: "home-features" },
    Sc = { class: "wrapper" },
    Fc = { class: "container" },
    Nc = { class: "features" },
    Hc = { key: 0, class: "title" },
    Uc = { key: 1, class: "details" },
    Bc = ie({ setup(e) { const { frontmatter: t } = me(), n = j(() => t.value.features && t.value.features.length > 0), s = j(() => t.value.features ? t.value.features : []); return (r, o) => k(n) ? (T(), S("div", Rc, [F("div", Sc, [F("div", Fc, [F("div", Nc, [(T(!0), S(fe, null, Ln(k(s), (i, l) => (T(), S("section", { key: l, class: "feature" }, [i.title ? (T(), S("h2", Hc, be(i.title), 1)) : J("", !0), i.details ? (T(), S("p", Uc, be(i.details), 1)) : J("", !0)]))), 128))])])])])) : J("", !0) } });
var jc = ce(Bc, [
    ["__scopeId", "data-v-6d10032f"]
]);
const Dc = { key: 0, class: "footer" },
    Kc = { class: "container" },
    Wc = { class: "text" },
    qc = ie({ setup(e) { const { frontmatter: t } = me(); return (n, s) => k(t).footer ? (T(), S("footer", Dc, [F("div", Kc, [F("p", Wc, be(k(t).footer), 1)])])) : J("", !0) } });
var zc = ce(qc, [
    ["__scopeId", "data-v-780127d7"]
]);
const Vc = { class: "home", "aria-labelledby": "main-title" },
    Jc = { class: "home-content" },
    Yc = ie({ setup(e) { return (t, n) => { const s = an("Content"); return T(), S("main", Vc, [H(Mc), ue(t.$slots, "hero", {}, void 0, !0), H(jc), F("div", Jc, [H(s)]), ue(t.$slots, "features", {}, void 0, !0), H(zc), ue(t.$slots, "footer", {}, void 0, !0)]) } } });
var Xc = ce(Yc, [
    ["__scopeId", "data-v-0baf5156"]
]);
const Zc = ["href", "aria-label"],
    Qc = ["src"],
    Gc = ie({ setup(e) { const { site: t, theme: n, localePath: s } = me(); return (r, o) => (T(), S("a", { class: "nav-bar-title", href: k(s), "aria-label": `${k(t).title}, back to home` }, [k(n).logo ? (T(), S("img", { key: 0, class: "logo", src: k(yt)(k(n).logo), alt: "Logo" }, null, 8, Qc)) : J("", !0), zt(" " + be(k(t).title), 1)], 8, Zc)) } });
var eu = ce(Gc, [
    ["__scopeId", "data-v-a62db294"]
]);

function tu() {
    const { site: e, localePath: t, theme: n } = me();
    return j(() => {
        const s = e.value.langs,
            r = Object.keys(s);
        if (r.length < 2) return null;
        const i = et().path.replace(t.value, ""),
            l = r.map(f => ({ text: s[f].label, link: `${f}${i}` }));
        return { text: n.value.selectText || "Languages", items: l }
    })
}
const nu = ["GitHub", "GitLab", "Bitbucket"].map(e => [e, new RegExp(e, "i")]);

function su() {
    const { site: e } = me();
    return j(() => {
        const t = e.value.themeConfig,
            n = t.docsRepo || t.repo;
        if (!n) return null;
        const s = ru(n);
        return { text: ou(s, t.repoLabel), link: s }
    })
}

function ru(e) { return ho.test(e) ? e : `https://github.com/${e}` }

function ou(e, t) { if (t) return t; const n = e.match(/^https?:\/\/[^/]+/); if (!n) return "Source"; const s = nu.find(([r, o]) => o.test(n[0])); return s && s[0] ? s[0] : "Source" }
const iu = e => (Dr("data-v-12a59b8e"), e = e(), Kr(), e),
    lu = { class: "nav-dropdown-link-item" },
    cu = iu(() => F("span", { class: "arrow" }, null, -1)),
    uu = { class: "text" },
    au = { class: "icon" },
    fu = ie({
        props: { item: null },
        setup(e) {
            const n = Rr(e),
                { props: s, isExternal: r } = yo(n.item);
            return (o, i) => (T(), S("div", lu, [F("a", vs({ class: "item" }, k(s)), [cu, F("span", uu, be(e.item.text), 1), F("span", au, [k(r) ? (T(), ge($s, { key: 0 })) : J("", !0)])], 16)]))
        }
    });
var du = ce(fu, [
    ["__scopeId", "data-v-12a59b8e"]
]);
const hu = ["aria-label"],
    pu = { class: "button-text" },
    _u = { class: "dialog" },
    gu = ie({
        props: { item: null },
        setup(e) {
            const t = et(),
                n = wn(!1);
            ot(() => t.path, () => { n.value = !1 });

            function s() { n.value = !n.value }
            return (r, o) => (T(), S("div", { class: ct(["nav-dropdown-link", { open: n.value }]) }, [F("button", { class: "button", "aria-label": e.item.ariaLabel, onClick: s }, [F("span", pu, be(e.item.text), 1), F("span", { class: ct(["button-arrow", n.value ? "down" : "right"]) }, null, 2)], 8, hu), F("ul", _u, [(T(!0), S(fe, null, Ln(e.item.items, i => (T(), S("li", { key: i.text, class: "dialog-item" }, [H(du, { item: i }, null, 8, ["item"])]))), 128))])], 2))
        }
    });
var cr = ce(gu, [
    ["__scopeId", "data-v-3f3d8bc0"]
]);
const mu = { key: 0, class: "nav-links" },
    vu = { key: 1, class: "item" },
    bu = { key: 2, class: "item" },
    yu = ie({ setup(e) { const { theme: t } = me(), n = tu(), s = su(), r = j(() => t.value.nav || s.value || n.value); return (o, i) => k(r) ? (T(), S("nav", mu, [k(t).nav ? (T(!0), S(fe, { key: 0 }, Ln(k(t).nav, l => (T(), S("div", { key: l.text, class: "item" }, [l.items ? (T(), ge(cr, { key: 0, item: l }, null, 8, ["item"])) : (T(), ge(_n, { key: 1, item: l }, null, 8, ["item"]))]))), 128)) : J("", !0), k(n) ? (T(), S("div", vu, [H(cr, { item: k(n) }, null, 8, ["item"])])) : J("", !0), k(s) ? (T(), S("div", bu, [H(_n, { item: k(s) }, null, 8, ["item"])])) : J("", !0)])) : J("", !0) } });
var xo = ce(yu, [
    ["__scopeId", "data-v-38cdc740"]
]);
const xu = { emits: ["toggle"] },
    wu = F("svg", { class: "icon", xmlns: "http://www.w3.org/2000/svg", "aria-hidden": "true", role: "img", viewBox: "0 0 448 512" }, [F("path", { fill: "currentColor", d: "M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z", class: "" })], -1),
    $u = [wu];

function ku(e, t, n, s, r, o) { return T(), S("div", { class: "sidebar-button", onClick: t[0] || (t[0] = i => e.$emit("toggle")) }, $u) }
var Cu = ce(xu, [
    ["render", ku]
]);
const Eu = e => (Dr("data-v-0afa6a56"), e = e(), Kr(), e),
    Tu = { class: "nav-bar" },
    Pu = Eu(() => F("div", { class: "flex-grow" }, null, -1)),
    Lu = { class: "nav" },
    Au = ie({ emits: ["toggle"], setup(e) { return (t, n) => (T(), S("header", Tu, [H(Cu, { onToggle: n[0] || (n[0] = s => t.$emit("toggle")) }), H(eu), Pu, F("div", Lu, [H(xo)]), ue(t.$slots, "search", {}, void 0, !0)])) } });
var Iu = ce(Au, [
    ["__scopeId", "data-v-0afa6a56"]
]);

function Ou() {
    let e = null,
        t = null;
    const n = Nu(s, 300);

    function s() {
        const i = Mu(),
            l = Ru(i);
        for (let c = 0; c < l.length; c++) {
            const f = l[c],
                h = l[c + 1],
                [g, x] = Fu(c, f, h);
            if (g) { history.replaceState(null, document.title, x || " "), r(x); return }
        }
    }

    function r(i) {
        if (o(t), o(e), t = document.querySelector(`.sidebar a[href="${i}"]`), !t) return;
        t.classList.add("active");
        const l = t.closest(".sidebar-links > ul > li");
        l && l !== t.parentElement ? (e = l.querySelector("a"), e && e.classList.add("active")) : e = null
    }

    function o(i) { i && i.classList.remove("active") }
    kt(() => { s(), window.addEventListener("scroll", n) }), Yr(() => { r(decodeURIComponent(location.hash)) }), Tn(() => { window.removeEventListener("scroll", n) })
}

function Mu() { return [].slice.call(document.querySelectorAll(".sidebar a.sidebar-link-item")) }

function Ru(e) { return [].slice.call(document.querySelectorAll(".header-anchor")).filter(t => e.some(n => n.hash === t.hash)) }

function Su() { return document.querySelector(".nav-bar").offsetHeight }

function ur(e) { const t = Su(); return e.parentElement.offsetTop - t - 15 }

function Fu(e, t, n) { const s = window.scrollY; return e === 0 && s === 0 ? [!0, null] : s < ur(t) ? [!1, null] : !n || s < ur(n) ? [!0, decodeURIComponent(t.hash)] : [!1, null] }

function Nu(e, t) { let n, s = !1; return () => { n && clearTimeout(n), s ? n = setTimeout(e, t) : (e(), s = !0, setTimeout(() => { s = !1 }, t)) } }

function Hu() {
    const e = et(),
        { site: t } = me();
    return Ou(), j(() => {
        const n = e.data.headers,
            s = e.data.frontmatter.sidebar,
            r = e.data.frontmatter.sidebarDepth;
        if (s === !1) return [];
        if (s === "auto") return ar(n, r);
        const o = ws(t.value.themeConfig.sidebar, e.data.relativePath);
        return o === !1 ? [] : o === "auto" ? ar(n, r) : o
    })
}

function ar(e, t) {
    const n = [];
    if (e === void 0) return [];
    let s;
    return e.forEach(({ level: r, title: o, slug: i }) => {
        if (r - 1 > t) return;
        const l = { text: o, link: `#${i}` };
        r === 2 ? (s = l, n.push(l)) : s && (s.children || (s.children = [])).push(l)
    }), n
}
const wo = e => {
    const t = et(),
        { site: n, frontmatter: s } = me(),
        r = e.depth || 1,
        o = s.value.sidebarDepth || 1 / 0,
        i = t.data.headers,
        l = e.item.text,
        c = Uu(n.value.base, e.item.link),
        f = e.item.children,
        h = pc(t, e.item.link),
        g = r < o ? $o(h, f, i, r + 1) : null;
    return ut("li", { class: "sidebar-link" }, [ut(c ? "a" : "p", { class: { "sidebar-link-item": !0, active: h }, href: c }, l), g])
};

function Uu(e, t) { return t === void 0 || t.startsWith("#") ? t : _c(e, t) }

function $o(e, t, n, s = 1) { return t && t.length > 0 ? ut("ul", { class: "sidebar-links" }, t.map(r => ut(wo, { item: r, depth: s }))) : e && n ? $o(!1, Bu(n), void 0, s) : null }

function Bu(e) { return ko(ju(e)) }

function ju(e) { e = e.map(n => Object.assign({}, n)); let t; return e.forEach(n => { n.level === 2 ? t = n : t && (t.children || (t.children = [])).push(n) }), e.filter(n => n.level === 2) }

function ko(e) { return e.map(t => ({ text: t.title, link: `#${t.slug}`, children: t.children ? ko(t.children) : void 0 })) }
const Du = { key: 0, class: "sidebar-links" },
    Ku = ie({ setup(e) { const t = Hu(); return (n, s) => k(t).length > 0 ? (T(), S("ul", Du, [(T(!0), S(fe, null, Ln(k(t), r => (T(), ge(k(wo), { item: r }, null, 8, ["item"]))), 256))])) : J("", !0) } });
const Wu = ie({ props: { open: { type: Boolean } }, setup(e) { return (t, n) => (T(), S("aside", { class: ct(["sidebar", { open: e.open }]) }, [H(xo, { class: "nav" }), ue(t.$slots, "sidebar-top", {}, void 0, !0), H(Ku), ue(t.$slots, "sidebar-bottom", {}, void 0, !0)], 2)) } });
var qu = ce(Wu, [
    ["__scopeId", "data-v-592b690d"]
]);
const zu = /bitbucket.org/;

function Vu() { const { page: e, theme: t, frontmatter: n } = me(), s = j(() => { const { repo: o, docsDir: i = "", docsBranch: l = "master", docsRepo: c = o, editLinks: f } = t.value, h = n.value.editLink != null ? n.value.editLink : f, { relativePath: g } = e.value; return !h || !g || !o ? null : Ju(o, c, i, l, g) }), r = j(() => t.value.editLinkText || "Edit this page"); return { url: s, text: r } }

function Ju(e, t, n, s, r) { return zu.test(e) ? Xu(e, t, n, s, r) : Yu(e, t, n, s, r) }

function Yu(e, t, n, s, r) { return (xs(t) ? t : `https://github.com/${t}`).replace(pn, "") + `/edit/${s}/` + (n ? n.replace(pn, "") + "/" : "") + r }

function Xu(e, t, n, s, r) { return (xs(t) ? t : e).replace(pn, "") + `/src/${s}/` + (n ? n.replace(pn, "") + "/" : "") + r + `?mode=edit&spa=0&at=${s}&fileviewer=file-view-default` }
const Zu = { class: "edit-link" },
    Qu = ["href"],
    Gu = ie({ setup(e) { const { url: t, text: n } = Vu(); return (s, r) => (T(), S("div", Zu, [k(t) ? (T(), S("a", { key: 0, class: "link", href: k(t), target: "_blank", rel: "noopener noreferrer" }, [zt(be(k(n)) + " ", 1), H($s, { class: "icon" })], 8, Qu)) : J("", !0)])) } });
var ea = ce(Gu, [
    ["__scopeId", "data-v-03e048d4"]
]);
const ta = { key: 0, class: "last-updated" },
    na = { class: "prefix" },
    sa = { class: "datetime" },
    ra = ie({ setup(e) { const { theme: t, page: n } = me(), s = j(() => { const i = t.value.lastUpdated; return i !== void 0 && i !== !1 && n.value.lastUpdated !== 0 }), r = j(() => { const i = t.value.lastUpdated; return i === !0 ? "Last Updated" : i }), o = wn(""); return kt(() => { qr(() => { o.value = new Date(n.value.lastUpdated).toLocaleString("en-US") }) }), (i, l) => k(s) ? (T(), S("p", ta, [F("span", na, be(k(r)) + ":", 1), F("span", sa, be(o.value), 1)])) : J("", !0) } });
var oa = ce(ra, [
    ["__scopeId", "data-v-fa7a54b0"]
]);
const ia = { class: "page-footer" },
    la = { class: "edit" },
    ca = { class: "updated" },
    ua = ie({ setup(e) { const { page: t } = me(); return (n, s) => (T(), S("footer", ia, [F("div", la, [H(ea)]), F("div", ca, [k(t).lastUpdated ? (T(), ge(oa, { key: 0 })) : J("", !0)])])) } });
var aa = ce(ua, [
    ["__scopeId", "data-v-d4b64b7a"]
]);

function fa() { const { page: e, theme: t } = me(), n = j(() => vo(Gn(e.value.relativePath))), s = j(() => { const c = ws(t.value.sidebar, n.value); return ys(c) ? bo(c) : [] }), r = j(() => s.value.findIndex(c => c.link === n.value)), o = j(() => { if (t.value.nextLinks !== !1 && r.value > -1 && r.value < s.value.length - 1) return s.value[r.value + 1] }), i = j(() => { if (t.value.prevLinks !== !1 && r.value > 0) return s.value[r.value - 1] }), l = j(() => !!o.value || !!i.value); return { next: o, prev: i, hasLinks: l } }
const da = {},
    ha = { xmlns: "http://www.w3.org/2000/svg", viewBox: "0 0 24 24" },
    pa = F("path", { d: "M19,11H7.4l5.3-5.3c0.4-0.4,0.4-1,0-1.4s-1-0.4-1.4,0l-7,7c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.2-0.1,0.5,0,0.8c0.1,0.1,0.1,0.2,0.2,0.3l7,7c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L7.4,13H19c0.6,0,1-0.4,1-1S19.6,11,19,11z" }, null, -1),
    _a = [pa];

function ga(e, t) { return T(), S("svg", ha, _a) }
var ma = ce(da, [
    ["render", ga]
]);
const va = {},
    ba = { xmlns: "http://www.w3.org/2000/svg", viewBox: "0 0 24 24" },
    ya = F("path", { d: "M19.9,12.4c0.1-0.2,0.1-0.5,0-0.8c-0.1-0.1-0.1-0.2-0.2-0.3l-7-7c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l5.3,5.3H5c-0.6,0-1,0.4-1,1s0.4,1,1,1h11.6l-5.3,5.3c-0.4,0.4-0.4,1,0,1.4c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l7-7C19.8,12.6,19.9,12.5,19.9,12.4z" }, null, -1),
    xa = [ya];

function wa(e, t) { return T(), S("svg", ba, xa) }
var $a = ce(va, [
    ["render", wa]
]);
const ka = { key: 0, class: "next-and-prev-link" },
    Ca = { class: "container" },
    Ea = { class: "prev" },
    Ta = ["href"],
    Pa = { class: "text" },
    La = { class: "next" },
    Aa = ["href"],
    Ia = { class: "text" },
    Oa = ie({ setup(e) { const { hasLinks: t, prev: n, next: s } = fa(); return (r, o) => k(t) ? (T(), S("div", ka, [F("div", Ca, [F("div", Ea, [k(n) ? (T(), S("a", { key: 0, class: "link", href: k(yt)(k(n).link) }, [H(ma, { class: "icon icon-prev" }), F("span", Pa, be(k(n).text), 1)], 8, Ta)) : J("", !0)]), F("div", La, [k(s) ? (T(), S("a", { key: 0, class: "link", href: k(yt)(k(s).link) }, [F("span", Ia, be(k(s).text), 1), H($a, { class: "icon icon-next" })], 8, Aa)) : J("", !0)])])])) : J("", !0) } });
var Ma = ce(Oa, [
    ["__scopeId", "data-v-7dc2f584"]
]);
const Ra = { class: "page" },
    Sa = { class: "container" },
    Fa = ie({ setup(e) { return (t, n) => { const s = an("Content"); return T(), S("main", Ra, [F("div", Sa, [ue(t.$slots, "top", {}, void 0, !0), H(s, { class: "content" }), H(aa), H(Ma), ue(t.$slots, "bottom", {}, void 0, !0)])]) } } });
var Na = ce(Fa, [
    ["__scopeId", "data-v-8ace9b76"]
]);
const Ha = { key: 0, id: "ads-container" },
    Ua = ie({
        setup(e) {
            const t = () => null,
                n = t,
                s = t,
                r = t,
                o = et(),
                { site: i, page: l, theme: c, frontmatter: f } = me(),
                h = j(() => !!f.value.customLayout),
                g = j(() => !!f.value.home),
                x = j(() => Object.keys(i.value.langs).length > 1),
                P = j(() => { const I = c.value; return f.value.navbar === !1 || I.navbar === !1 ? !1 : i.value.title || I.logo || I.repo || I.nav }),
                M = wn(!1),
                V = j(() => f.value.home || f.value.sidebar === !1 ? !1 : !vc(ws(c.value.sidebar, o.data.relativePath))),
                m = I => { M.value = typeof I == "boolean" ? I : !M.value },
                w = m.bind(null, !1);
            ot(o, w);
            const W = j(() => [{ "no-navbar": !P.value, "sidebar-open": M.value, "no-sidebar": !V.value }]);
            return (I, U) => {
                const X = an("Content"),
                    Z = an("Debug");
                return T(), S(fe, null, [F("div", { class: ct(["theme", k(W)]) }, [k(P) ? (T(), ge(Iu, { key: 0, onToggle: m }, { search: je(() => [ue(I.$slots, "navbar-search", {}, () => [k(c).algolia ? (T(), ge(k(r), { key: 0, options: k(c).algolia, multilang: k(x) }, null, 8, ["options", "multilang"])) : J("", !0)])]), _: 3 })) : J("", !0), H(qu, { open: M.value }, { "sidebar-top": je(() => [ue(I.$slots, "sidebar-top")]), "sidebar-bottom": je(() => [ue(I.$slots, "sidebar-bottom")]), _: 3 }, 8, ["open"]), F("div", { class: "sidebar-mask", onClick: U[0] || (U[0] = B => m(!1)) }), k(h) ? (T(), ge(X, { key: 1 })) : k(g) ? ue(I.$slots, "home", { key: 2 }, () => [H(Xc, null, { hero: je(() => [ue(I.$slots, "home-hero")]), features: je(() => [ue(I.$slots, "home-features")]), footer: je(() => [ue(I.$slots, "home-footer")]), _: 3 })]) : (T(), ge(Na, { key: 3 }, { top: je(() => [ue(I.$slots, "page-top-ads", {}, () => [k(c).carbonAds && k(c).carbonAds.carbon ? (T(), S("div", Ha, [(T(), ge(k(n), { key: "carbon" + k(l).relativePath, code: k(c).carbonAds.carbon, placement: k(c).carbonAds.placement }, null, 8, ["code", "placement"]))])) : J("", !0)]), ue(I.$slots, "page-top")]), bottom: je(() => [ue(I.$slots, "page-bottom"), ue(I.$slots, "page-bottom-ads", {}, () => [k(c).carbonAds && k(c).carbonAds.custom ? (T(), ge(k(s), { key: "custom" + k(l).relativePath, code: k(c).carbonAds.custom, placement: k(c).carbonAds.placement }, null, 8, ["code", "placement"])) : J("", !0)])]), _: 3 }))], 2), H(Z)], 64)
            }
        }
    }),
    Ba = { class: "theme" },
    ja = F("h1", null, "404", -1),
    Da = ["href"],
    Ka = ie({
        setup(e) {
            const { site: t } = me(), n = ["There's nothing here.", "How did we get here?", "That's a Four-Oh-Four.", "Looks like we've got some broken links."];

            function s() { return n[Math.floor(Math.random() * n.length)] }
            return (r, o) => (T(), S("div", Ba, [ja, F("blockquote", null, be(s()), 1), F("a", { href: k(t).base, "aria-label": "go to home" }, "Take me home.", 8, Da)]))
        }
    }),
    gn = { Layout: Ua, NotFound: Ka },
    Bn = new Set,
    Co = () => document.createElement("link"),
    Wa = e => {
        const t = Co();
        t.rel = "prefetch", t.href = e, document.head.appendChild(t)
    },
    qa = e => {
        const t = new XMLHttpRequest;
        t.open("GET", e, t.withCredentials = !0), t.send()
    };
let tn;
const za = Oe && (tn = Co()) && tn.relList && tn.relList.supports && tn.relList.supports("prefetch") ? Wa : qa;

function Va() {
    if (!Oe || !window.IntersectionObserver) return;
    let e;
    if ((e = navigator.connection) && (e.saveData || /2g/.test(e.effectiveType))) return;
    const t = window.requestIdleCallback || setTimeout;
    let n = null;
    const s = () => {
        n && n.disconnect(), n = new IntersectionObserver(o => {
            o.forEach(i => {
                if (i.isIntersecting) {
                    const l = i.target;
                    n.unobserve(l);
                    const { pathname: c } = l;
                    if (!Bn.has(c)) {
                        Bn.add(c);
                        const f = _o(c);
                        za(f)
                    }
                }
            })
        }), t(() => {
            document.querySelectorAll("#app a").forEach(o => {
                const { target: i, hostname: l, pathname: c } = o, f = c.match(/\.\w+$/);
                f && f[0] !== ".html" || i !== "_blank" && l === location.hostname && (c !== location.pathname ? n.observe(o) : Bn.add(c))
            })
        })
    };
    kt(s);
    const r = et();
    ot(() => r.path, s), Tn(() => { n && n.disconnect() })
}
const Ja = ie({ setup(e, { slots: t }) { const n = wn(!1); return kt(() => { n.value = !0 }), () => n.value && t.default ? t.default() : null } }),
    Ya = gn.NotFound || (() => "404 Not Found"),
    Xa = { name: "VitePressApp", setup() { const { site: e } = me(); return kt(() => { ot(() => e.value.lang, t => { document.documentElement.lang = t }, { immediate: !0 }) }), Va(), () => ut(gn.Layout) } };

function Za() {
    const e = Ga(),
        t = Qa();
    t.provide(go, e);
    const n = nc(e.route);
    return t.provide(po, n), t.component("Content", ac), t.component("ClientOnly", Ja), t.component("Debug", () => null), Object.defineProperty(t.config.globalProperties, "$frontmatter", {get() { return n.frontmatter.value } }), gn.enhanceApp && gn.enhanceApp({ app: t, router: e, siteData: Vt }), { app: t, router: e, data: n }
}

function Qa() { return Jl(Xa) }

function Ga() {
    let e = Oe,
        t;
    return oc(n => {
        let s = _o(n);
        return e && (t = s), (e || t === s) && (s = s.replace(/\.js$/, ".lean.js")), Oe ? (e = !1, Ao(() =>
            import (s), [])) : require(s)
    }, Ya)
}
if (Oe) {
    const { app: e, router: t, data: n } = Za();
    t.go().then(() => { lc(t.route, n.site), e.mount("#app") })
}
export { ce as _, ef as a, S as c, Za as createApp, T as o };