"use strict";(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[95445],{95445:(e,r,n)=>{n.r(r),n.d(r,{default:()=>a});var t=n(52833),u=n(55991),s=n(34828),c=function({videoClassNames:e="",videoWrapperClassNames:r="",settings:n={},setPlayer:c,initPlayerOnMount:l}){let a=(0,u.useRef)(null),f=(0,u.useRef)(null),i=(0,u.useRef)(null),o=(0,u.useRef)(null);return(0,u.useEffect)(()=>{f.current&&(f.current.settings=n)},[n]),(0,u.useEffect)(()=>{i.current=window[s.IV]??new s.kb,o.current&&(n.videoWrapper=o.current),a.current&&(l?i.current.initPlayerElement(a.current,n):(f.current=new s.L9(a.current,n),i.current.registerPlayer(f.current)),"function"==typeof c&&f.current&&c(f.current))},[]),(0,u.useEffect)(()=>()=>{f.current&&(f.current.destroy(),f.current=null)},[]),(0,t.Y)("div",{ref:o,className:r,children:(0,t.Y)("video",{ref:a,className:e,playsInline:!0})})},l=n(1438);let a=function(e){return(0,l.Y)(c,e)}}}]);