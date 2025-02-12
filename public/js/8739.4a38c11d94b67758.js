"use strict";(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[8739,31120,38768],{96029:(e,t,a)=>{a.d(t,{i:()=>i,v:()=>r});let r="DEFAULT",i="ENHANCED"},97968:(e,t,a)=>{a.d(t,{VE:()=>m,pq:()=>f,xs:()=>y});var r=a(46714),i=a(67522),n=a(20500),o=a(83654),d=a(47510),E=a(73144),l=a(68877),s=a(10311),c=a(65973),I=a(55991),u=a(94758),_=a(35888),p=a(94053),A=a(31108);let{RUNTIME_GLIMMER_BUNDLE_PATH:D,RUNTIME_GLIMMER_BUNDLE_PREFIX:O}=n.Ay;function m(e,t){let a=(0,r.usePageData)("data.content.0.media"),n=(0,r.usePageData)("bodyDom.children.0"),o=(0,r.usePageData)("data.content.0.metadata.header.title_layout"),s=(0,A._)("video.use-social-image");if(l.B.TITLE_LAYOUT_UNDER===o&&e===d.pz.LEAD||!s)return null;let c=(0,p.lo)(i.w1.SOCIAL,a);if(!c)return null;if(e===d.pz.LEAD)return(0,_.V)(c,{crop:"16x9"});if(e===d.pz.IN_BODY){let e=!!(0,p.W0)(a,i.w1.LEDE),r=t?.metadata?.options?.embedAspectRatio;if(!e&&(n?.name??"")==="mediaosvideo")return(0,_.V)(c,{crop:(0,E._)(r)})}return null}function f(){let e=(0,o.o)().get("glimmer_pr");return e||D?`${O}/${e||D}/`:`${O}/`}function y(e=0){let t=(0,s.md)(u.y)[e],a=(0,s.md)(c.xr);(0,I.useEffect)(()=>{let e=t?t?.plugins.get("stickyPlayer"):null;e&&e.setStickyPlayerPosition("BOTTOM",a)},[t,a])}},8739:(e,t,a)=>{a.r(t),a.d(t,{default:()=>U});var r=a(84032),i=a(67522),n=a(92075),o=a(26448),d=a(96029),E=a(66481),l=a(46714),s=a(47510),c=a(73144),I=a(38768),u=a(31108),_=a(50096),p=a.n(_),A=a(97968),D=a(53685),O=a(97552),m=a(73772),f=a(2865);let y=(0,m.A)("div",{target:"e20tmgw0"})((0,f.Ay)("video-in-body-embed-wrapper",{display:{_:"block"},position:{_:"relative"},mb:"s","&.aspect-ratio-1x1":{width:{_:"100%","md>":"90%"},marginLeft:{_:"auto"},marginRight:{_:"auto"}},"&.aspect-ratio-9x16":{width:{_:"95%",xs:"75%","sm>":"65%"},marginLeft:{_:"auto"},marginRight:{_:"auto"}}}),"");var b=a(1438);let T=["dataNodeId","aspectRatioClass","forwardedRef"],R=function(e){let{dataNodeId:t,aspectRatioClass:a,forwardedRef:r=null}=e,i=(0,O.A)(e,T);return(0,b.Y)(y,(0,D.A)({ref:r,"data-node-id":t,className:`embed ${a}`},i))};function L(e,t){var a=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),a.push.apply(a,r)}return a}function N(e){for(var t=1;t<arguments.length;t++){var a=null!=arguments[t]?arguments[t]:{};t%2?L(Object(a),!0).forEach(function(t){(0,r.A)(e,t,a[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(a)):L(Object(a)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(a,t))})}return e}let P=p()(()=>Promise.all([a.e(57207),a.e(32013)]).then(a.bind(a,32013)),{loadableGenerated:{webpack:()=>[32013]}}),w={"data-position":4,"data-dock":"true","data-disable-ads":"false","data-sticky":"false","data-muted":"true"},S=(e,t,a)=>{if(!a||e.some(({media_type:e,role:t})=>e===i.Z2.VIDEO&&t===i.w1.LEDE))return!1;let r=e.findIndex(({media_type:e,role:t})=>e===i.Z2.VIDEO&&t===i.w1.BODY_MEDIA);return -1!==r&&e[r].mediaId===t};function U(e){let t=new o.A("Embed Player"),{mediaid:a,"data-node-id":r,embedid:_,displaytype:p,unlock:D}=e,O=(0,l.usePageData)("data.content.0.media");O=(0,n.G)("media.override")()||O;let m=(0,l.useTemplateData)("isStickyBodyVideoEnabled"),f=(0,u._)("video.use-video-player-two"),y=(0,E.am)(O,a),T=y?.metadata?.options?.embedAspectRatio,L={position:s.pz.IN_BODY,hearstPlayerProviderSettings:{controlBar:{useMobileControls:T!==s.tI["16x9"]}}},U=f?s.W4.VIDEO_PLAYER:null,g=(0,A.VE)(L.position,y),v=y?`aspect-ratio-${(0,c._)(T)}`:"";(0,A.xs)(),y||t.error("Failed to find MediaObj embed");let M=S(O,a,m)?N(N({},w),{},{"data-sticky":"true"}):w;return _&&"numbered_list"===p?(0,b.Y)(P,{initialCount:3,videoEmbedId:_,unlock:D}):y?(0,b.Y)(R,{className:`embed ${f?v:""}`,"data-embed":"video",dataNodeId:r},(0,b.Y)(I.default,{aspectRatioClass:v,aspectRatio:T,videoEmbed:y,mediaType:i.Z2.VIDEO,dataAttrs:M,playerType:d.i,playerSettings:L,socialImageUrl:g,playerOverride:U})):null}},38768:(e,t,a)=>{a.r(t),a.d(t,{default:()=>I});var r=a(97552),i=a(67522),n=a(50096),o=a.n(n),d=a(1438);let E=["mediaType"],l=o()(()=>a.e(40588).then(a.bind(a,40588)),{loadableGenerated:{webpack:()=>[40588]}}),s=o()(()=>a.e(9996).then(a.bind(a,9996)),{loadableGenerated:{webpack:()=>[9996]}}),c={[i.Z2.VIDEO]:l,[i.Z2.EMBED]:s},I=function(e){let{mediaType:t}=e,a=(0,r.A)(e,E),i=c[t]??l;return(0,d.Y)(i,a)}},47510:(e,t,a)=>{var r,i,n,o,d,E,l,s;a.d(t,{F4:()=>o,FB:()=>d,UU:()=>u,W4:()=>n,ZS:()=>_,eU:()=>c,hU:()=>I,lw:()=>E,pz:()=>i,tI:()=>r,wG:()=>s}),function(e){e["16x9"]="16:9",e["9x16"]="9:16"}(r||(r={}));let c={default:{resize:"480:*"}},I="hearst-player-event";!function(e){e.LEAD="LEAD",e.FEED="FEED",e.IN_BODY="IN_BODY",e.WATCH_NEXT="WATCH_NEXT",e.WATCH_NEXT_IN_BODY="WATCH_NEXT_IN_BODY",e.SLIDE="SLIDE",e.VIDEOHUB="VIDEOHUB"}(i||(i={})),function(e){e.VIDEO_JS="VIDEOJS",e.VIDEO_PLAYER="VIDEO_PLAYER"}(n||(n={})),function(e){e.ADS_IMA_ERROR="ads-ima-adError",e.ADS_IMA_CLICK="ads-ima-click",e.ADS_IMA_COMPLETE="ads-ima-complete",e.ADS_IMA_FIRST_QUARTILE="ads-ima-firstquartile",e.ADS_IMA_IMPRESSION="ads-ima-impression",e.ADS_IMA_MIDPOINT="ads-ima-midpoint",e.ADS_IMA_PAUSE="ads-ima-pause",e.ADS_IMA_RESUME="ads-ima-resume",e.ADS_IMA_SKIP="ads-ima-skip",e.ADS_IMA_START="ads-ima-start",e.ADS_IMA_THIRD_QUARTILE="ads-ima-thirdquartile",e.PLAYLIST_FORWARD_BUTTON_EVENT="playlistForwardUser",e.PLAYLIST_BACKWARD_BUTTON_EVENT="playlistBackwardUser",e.PLAYED_Q0="played-q0",e.PLAYED_Q1="played-q1",e.PLAYED_Q2="played-q2",e.PLAYED_Q3="played-q3",e.PLAYED_Q4="played-q4",e.VIDEO_ERROR="error",e.MUTE_CHANGE_USER="mutechangeUser",e.PAUSE_USER="pauseUser",e.PLAY_USER="playUser",e.TEXT_TRACK_CHANGE_USER="texttrackchangeUser",e.UNMUTE_CHANGE_USER="unmutechangeUser",e.VOLUME_CHANGE_USER="volumechangeUser",e.STICKY_OFF="stickyOff",e.STICKY_CLOSE="stickyClose"}(o||(o={})),(d||(d={})).NITEHAWK_ERROR="nitehawkError",function(e){e.DEFAULT="DEFAULT",e.ENHANCED="ENHANCED"}(E||(E={})),function(e){e.MP4="video/mp4",e.AVI="video/avi",e.OGG="video/ogg",e.M3U8="m3u8"}(l||(l={})),function(e){e.INITIALIZING="initializing",e.INITIALIZED="initialized",e.EMBED="embed",e.FAILED="failed",e.ERROR_CODE="errorCode"}(s||(s={}));let u={[s.INITIALIZED]:!1,[s.INITIALIZING]:!1,[s.FAILED]:!1,[s.EMBED]:null,[s.ERROR_CODE]:!1},_="video_player_initialized"},94758:(e,t,a)=>{a.d(t,{F:()=>E,y:()=>l});var r=a(84032),i=a(93215),n=a(47510);function o(e,t){var a=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),a.push.apply(a,r)}return a}function d(e){for(var t=1;t<arguments.length;t++){var a=null!=arguments[t]?arguments[t]:{};t%2?o(Object(a),!0).forEach(function(t){(0,r.A)(e,t,a[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(a)):o(Object(a)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(a,t))})}return e}function E(e,t){switch(t.type){case n.wG.FAILED:return d(d({},e),{},{[n.wG.FAILED]:!0});case n.wG.ERROR_CODE:return d(d({},e),{},{[n.wG.FAILED]:!0,[n.wG.ERROR_CODE]:!0});case n.wG.INITIALIZING:return d(d({},e),{},{[n.wG.INITIALIZING]:!0});case n.wG.INITIALIZED:return d(d({},e),{},{[n.wG.INITIALIZED]:!0,[n.wG.INITIALIZING]:!1});case n.wG.EMBED:if(t.payload?.embed)return d(d({},e),{},{[n.wG.EMBED]:t.payload.embed});return e;default:return e}}let l=(0,i.eU)([])},73144:(e,t,a)=>{a.d(t,{_:()=>r});function r(e,t="16:9",a="x"){return(e||t).replace(":",a)}}}]);