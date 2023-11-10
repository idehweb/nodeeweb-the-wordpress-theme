(()=>{"use strict";var e,t={170:(e,t,l)=>{const a=window.wp.element,s=window.wp.i18n,r=window.wp.components,n=e=>{let{title:t,description:l,videoId:s,videoWidth:r="",videoHeight:n="",actions:o}=e;return(0,a.createElement)("div",{className:"video-container"},t&&(0,a.createElement)("h3",{className:"video-title"},t),l&&(0,a.createElement)("p",{className:"video-description"},l),(0,a.createElement)("div",{className:"video-wrapper"},(0,a.createElement)("iframe",{title:"GutSlider Blocks Video Tutorial",width:r||560,height:n||315,src:`https://www.youtube.com/embed/${s}`,allow:"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture",allowFullScreen:""})),o&&(0,a.createElement)("div",{className:"video-actions"},o.map(((e,t)=>(0,a.createElement)("a",{key:t,className:"video-action",href:e.link,target:"_blank",rel:"noopener noreferrer"},e.label)))))},o=()=>{(0,a.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"16",height:"16",fill:"currentColor",viewBox:"0 0 16 16"},(0,a.createElement)("path",{d:"M4.355.522a.5.5 0 0 1 .623.333l.291.956A4.979 4.979 0 0 1 8 1c1.007 0 1.946.298 2.731.811l.29-.956a.5.5 0 1 1 .957.29l-.41 1.352A4.985 4.985 0 0 1 13 6h.5a.5.5 0 0 0 .5-.5V5a.5.5 0 0 1 1 0v.5A1.5 1.5 0 0 1 13.5 7H13v1h1.5a.5.5 0 0 1 0 1H13v1h.5a1.5 1.5 0 0 1 1.5 1.5v.5a.5.5 0 1 1-1 0v-.5a.5.5 0 0 0-.5-.5H13a5 5 0 0 1-10 0h-.5a.5.5 0 0 0-.5.5v.5a.5.5 0 1 1-1 0v-.5A1.5 1.5 0 0 1 2.5 10H3V9H1.5a.5.5 0 0 1 0-1H3V7h-.5A1.5 1.5 0 0 1 1 5.5V5a.5.5 0 0 1 1 0v.5a.5.5 0 0 0 .5.5H3c0-1.364.547-2.601 1.432-3.503l-.41-1.352a.5.5 0 0 1 .333-.623zM4 7v4a4 4 0 0 0 3.5 3.97V7H4zm4.5 0v7.97A4 4 0 0 0 12 11V7H8.5zM12 6a3.989 3.989 0 0 0-1.334-2.982A3.983 3.983 0 0 0 8 2a3.983 3.983 0 0 0-2.667 1.018A3.989 3.989 0 0 0 4 6h8z"})),(0,a.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"16",height:"16",fill:"currentColor",viewBox:"0 0 16 16"},(0,a.createElement)("path",{d:"M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"}),(0,a.createElement)("path",{d:"M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8zm0 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"})),(0,a.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"16",height:"16",fill:"currentColor",viewBox:"0 0 16 16"},(0,a.createElement)("path",{d:"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"}),(0,a.createElement)("path",{d:"M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z"}))},i=e=>{let{icon:t,title:l,description:s,action:r}=e;return(0,a.createElement)("div",{className:"card-wrapper"},t&&(0,a.createElement)("div",{className:"card-icon"},o[t]),l&&(0,a.createElement)("h3",{className:"card-title"},l),s&&(0,a.createElement)("p",{className:"card-description"},s),r&&(0,a.createElement)("a",{className:"card-actions",href:r.link,target:"_blank",rel:"noopener noreferrer"},r.label))},c=()=>(0,a.createElement)("div",{className:"welcome-tab-elements"},(0,a.createElement)("div",{className:"tab-container flex"},(0,a.createElement)("div",{className:"flex-2"},(0,a.createElement)(n,{title:(0,s.__)("Welcome to GutSlider Blocks","slider-blocks"),description:(0,s.__)("GutSlider Blocks is a Gutenberg block plugin that allows you to create sliders in the Gutenberg editor. Watch this video to get started.","slider-blocks"),videoId:"3PJKCaqd9RQ",actions:[{label:(0,s.__)("More Videos","slider-blocks"),link:"https://gutslider.com/videos"},{label:(0,s.__)("Documentation","slider-blocks"),link:"https://gutslider.com/docs"}]})),(0,a.createElement)("div",{className:"flex-1"},(0,a.createElement)(i,{title:(0,s.__)("Report Bugs","slider-blocks"),description:(0,s.__)("If you have found a bug in GutSlider Blocks, please report it in our support forum. We will fix it as soon as possible.","slider-blocks"),action:{label:(0,s.__)("Report Now","slider-blocks"),link:"https://wordpress.org/support/plugin/slider-blocks/"}}),(0,a.createElement)(i,{title:(0,s.__)("Love the Plugin","slider-blocks"),description:(0,s.__)("If you love GutSlider Blocks, please leave us a review on WordPress.org. We appreciate your support!","slider-blocks"),action:{label:(0,s.__)("Rate Now","slider-blocks"),link:"https://wordpress.org/support/plugin/slider-blocks/reviews/#new-post"}}),(0,a.createElement)(i,{title:(0,s.__)("Contact Us","slider-blocks"),description:(0,s.__)("If you have any questions or need help with GutSlider Blocks, please contact us. We are happy to help you!","slider-blocks"),action:{label:(0,s.__)("Contact Us","slider-blocks"),link:"https://gutenbergkits.com/contact"}})))),m=window.wp.apiFetch;var d=l.n(m);const u=e=>{let{name:t,description:l,demoLink:n="",activeBlock:o,onClick:i}=e;return(0,a.createElement)("div",{className:"single-block-wrapper"},(0,a.createElement)("div",{className:"single-block-head flex"},(0,a.createElement)("h3",{className:"single-block-title"},t),(0,a.createElement)(r.ToggleControl,{checked:o,onChange:i})),(0,a.createElement)("p",{className:"single-block-description"},l),n&&(0,a.createElement)("a",{className:"single-block-actions",href:n,target:"_blank",rel:"noopener noreferrer"},(0,s.__)("View Demo","slider-blocks")))},g="/wp/v2/settings",p="https://gutslider.com/demos",h=()=>{const[e,t]=(0,a.useState)(null),[l,r]=(0,a.useState)(null),[n,o]=(0,a.useState)(null),[i,c]=(0,a.useState)(null),[m,h]=(0,a.useState)(null),[v,E]=(0,a.useState)(null),[w,_]=(0,a.useState)(!1),b=async(e,l)=>{try{const a=await d()({path:g,method:"POST",data:{[l]:e}});t(a.gut_fixed_content_slider),r(a.gut_any_content_slider),o(a.gut_testimonial_slider),c(a.gut_post_slider),h(a.gut_photo_carousel),E(a.gut_logo_carousel),_(!0)}catch(e){console.error("Error updating content slider status",e)}};return(0,a.useEffect)((()=>{d()({path:g}).then((e=>{let{gut_fixed_content_slider:l,gut_any_content_slider:a,gut_testimonial_slider:s,gut_post_slider:n,gut_photo_carousel:i,gut_logo_carousel:m}=e;t(l),r(a),o(s),c(n),h(i),E(m)}))}),[]),(0,a.useEffect)((()=>{const e=setTimeout((()=>{_(!1)}),2e3);return()=>clearTimeout(e)}),[w]),(0,a.createElement)(a.Fragment,null,w&&(0,a.createElement)("div",{className:"gutslider-data-update-notice"},(0,a.createElement)("span",{className:"notice-icon"},(0,a.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"16",height:"16",fill:"currentColor",viewBox:"0 0 16 16"},(0,a.createElement)("path",{d:"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"}),(0,a.createElement)("path",{d:"M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"}))),(0,s.__)("Changes saved successfully.","slider-blocks"),(0,a.createElement)("button",{className:"notice-close",onClick:()=>{_(!1)}},(0,a.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"16",height:"16",fill:"currentColor",viewBox:"0 0 16 16"},(0,a.createElement)("path",{d:"M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"})))),(0,a.createElement)("div",{className:"blocks-controls"},(0,a.createElement)(u,{name:"Any Content Slider",description:(0,s.__)("Create sliders with any content you want. You can add images, videos, text, buttons, and more.","slider-blocks"),demoLink:p,activeBlock:l,onClick:()=>b(!l,"gut_any_content_slider")}),(0,a.createElement)(u,{name:"Fixed Content Slider",description:(0,s.__)("Create sliders with fixed content. You can add images, text and button","slider-blocks"),demoLink:p,activeBlock:e,onClick:()=>b(!e,"gut_fixed_content_slider")}),(0,a.createElement)(u,{name:"Testimonial Slider",description:(0,s.__)("Showcase your custom testimonials or reviews in sliding mode easily.","slider-blocks"),demoLink:p,activeBlock:n,onClick:()=>b(!n,"gut_testimonial_slider")}),(0,a.createElement)(u,{name:"Post Slider",description:(0,s.__)("Showcase your blog posts in sliding mode easily and customize it as per your need.","slider-blocks"),demoLink:p,activeBlock:i,onClick:()=>b(!i,"gut_post_slider")}),(0,a.createElement)(u,{name:"Photo Carousel",description:(0,s.__)("Create an awesome carousel with your photos very easily in a short time.","slider-blocks"),demoLink:p,activeBlock:m,onClick:()=>b(!m,"gut_photo_carousel")}),(0,a.createElement)(u,{name:"Logo Carousel",description:(0,s.__)("Create an awesome carousel with your client logos very easily in a short time.","slider-blocks"),demoLink:p,activeBlock:v,onClick:()=>b(!v,"gut_logo_carousel")})))},v=()=>(0,a.createElement)("div",{className:"welcome-tab-elements"},(0,a.createElement)("div",{className:"tab-container"},(0,a.createElement)("h3",{className:"settings-title"},(0,s.__)("Blocks List","slider-blocks")),(0,a.createElement)("div",{className:"blocks-container"},(0,a.createElement)(h,null)))),E=e=>{let{name:t,description:l,active:s,onClick:n}=e;return(0,a.createElement)("div",{className:"single-asset-wrapper"},(0,a.createElement)("div",{className:"single-block-head flex"},(0,a.createElement)("h3",{className:"single-block-title"},t),(0,a.createElement)(r.ToggleControl,{checked:s,onChange:n})),(0,a.createElement)("p",{className:"single-block-description"},l))},w="/wp/v2/settings",_=()=>{const[e,t]=(0,a.useState)(null),[l,r]=(0,a.useState)(!1);return(0,a.useEffect)((()=>{d()({path:w}).then((e=>{let{swiper_scripts:l}=e;t(l)}))}),[]),(0,a.useEffect)((()=>{const e=setTimeout((()=>{r(!1)}),2e3);return()=>clearTimeout(e)}),[l]),(0,a.createElement)(a.Fragment,null,l&&(0,a.createElement)("div",{className:"gutslider-data-update-notice"},(0,a.createElement)("span",{className:"notice-icon"},(0,a.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"16",height:"16",fill:"currentColor",viewBox:"0 0 16 16"},(0,a.createElement)("path",{d:"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"}),(0,a.createElement)("path",{d:"M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"}))),(0,s.__)("Changes saved successfully.","slider-blocks"),(0,a.createElement)("button",{className:"notice-close",onClick:()=>{r(!1)}},(0,a.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"16",height:"16",fill:"currentColor",viewBox:"0 0 16 16"},(0,a.createElement)("path",{d:"M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"})))),(0,a.createElement)("div",{className:"settings-controls"},(0,a.createElement)(E,{name:"Swiper - 10.2 Version",description:(0,s.__)("Swiper JS is a powerful slider library that powers GutSlider Blocks. If you are already using Swiper JS on your website, you can disable it here. This will prevent any conflicts with the slider library. If you are not using Swiper JS, you must have to keep it enabled.","slider-blocks"),active:e,onClick:()=>(async(e,l)=>{try{const l=await d()({path:w,method:"POST",data:{swiper_scripts:e}});t(l.swiper_scripts),r(!0)}catch(e){console.error("Error updating",e)}})(!e)})))},b=()=>{const[e,t]=(0,a.useState)("assets");return(0,a.createElement)(a.Fragment,null,(0,a.createElement)("h3",{className:"settings-title"},(0,s.__)("GutSlider Settings","slider-blocks")),(0,a.createElement)("div",{className:"settings-tabs"},(0,a.createElement)("div",{className:"tab-container settings-height flex"},(0,a.createElement)("div",{className:"flex-1"},(0,a.createElement)("div",{className:"setting-buttons"},(0,a.createElement)(r.Button,{className:"setting-btn "+("assets"===e?"active":""),onClick:()=>{t("assets")}},(0,s.__)("Assets Settings","slider-blocks")))),(0,a.createElement)("div",{className:"flex-2"},"blocks"===e&&(0,a.createElement)(h,null),"assets"===e&&(0,a.createElement)(_,null)))))},k=e=>{let{version:t,date:l,changes:s}=e;return(0,a.createElement)("div",{className:"single-version"},(0,a.createElement)("div",{className:"version-number"},`Version: ${t}`),(0,a.createElement)("div",{className:"version-date"},l),(0,a.createElement)("div",{className:"version-changes"},s&&Object.keys(s).map(((e,t)=>(0,a.createElement)("div",{className:"version-changes-group",key:t},(0,a.createElement)("div",{className:"version-changes-group-title"},e),(0,a.createElement)("div",{className:"version-changes-group-list"},s[e].map(((e,t)=>(0,a.createElement)("div",{className:"version-changes-group-list-item",key:t},`- ${e}`)))))))))},f=()=>(0,a.createElement)("div",{className:"log-panel"},(0,a.createElement)(k,{version:"2.5.1",date:"10 November, 2023",changes:{added:["Button typography for fixed content slider","Logo carousel column number increase to 10","Logo carousel column gap increase to 200"],fixed:["Button transition issue fixed"]}}),(0,a.createElement)(k,{version:"2.5.0",date:"04 November, 2023",changes:{new:["New Block: Logo Carousel Block"],fixed:["Initial Navigation Issue","Initial Pagination Issue","Font Loading Issue","Dependency Issue"],improvements:["Improve code quality"]}}),(0,a.createElement)(k,{version:"2.4.0",date:"01 November, 2023",changes:{new:["New Block: Photo Carousel Block"]}}),(0,a.createElement)(k,{version:"2.3.0",date:"24 October, 2023",changes:{new:["New Block: Post Slider"],improvements:["Improve PHP code quality"]}}),(0,a.createElement)(k,{version:"2.2.2",date:"07 October, 2023",changes:{new:["New Block: Testimonial Slider"],fixed:["Adding New Block Issue","Block Recovery Issue","Direct Editor Editing Issue","Navigation Icon Color & Size Issue"],improvements:["Improve code quality","Improve performance","Blocks Icons"]}}),(0,a.createElement)(k,{version:"2.2.1",date:"30 September, 2023",changes:{fixed:["Outer navigation issue fixed"]}}),(0,a.createElement)(k,{version:"2.2.0",date:"30 September, 2023",changes:{features:["Complete Navigation Settings","New Navigation Styles","New Navigation Controls","Complete Pagination Settings","New Pagination Styles","New Pagination Controls","New Smart Admin Panel","Options to Enable/Disable Blocks","Option to enable/disable Swiper JS + CSS"],improvements:["Improve code quality","Improve performance"]}}),(0,a.createElement)(k,{version:"2.1.0",date:"21 September, 2023",changes:{features:["Carousel style","Any content slider and carousel","Slider and carousel controls","Navigation colors","New slider effects"],improvements:["Remove composer and make it simple","Improve code quality","Improve performance"]}}),(0,a.createElement)(k,{version:"1.0.0",date:"11 August,2023",changes:{info:["Initial release"]}})),N=e=>{let{setLogPanel:t}=e;return(0,a.createElement)("div",{className:"logs-panel-head flex"},(0,a.createElement)("h3",{className:"logs-panel-title"},(0,s.__)("GutSlider Changelogs","slider-blocks")),(0,a.createElement)(r.Button,{className:"close-log-panel",onClick:()=>t(!1)},(0,a.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"16",height:"16",fill:"currentColor",viewBox:"0 0 16 16"},(0,a.createElement)("path",{fillRule:"evenodd",d:"M12.293 3.293a1 1 0 0 1 1.414 1.414L9.414 9l4.293 4.293a1 1 0 1 1-1.414 1.414L8 10.414l-4.293 4.293a1 1 0 1 1-1.414-1.414L6.586 9 2.293 4.707A1 1 0 1 1 3.707 3.293L8 7.586l4.293-4.293z"}))))},C=()=>(0,a.createElement)("p",{className:"current-version"},(0,s.__)("2.5.1","slider-blocks")),y=()=>{const[e,t]=(0,a.useState)("welcome"),[l,n]=(0,a.useState)(!1);return(0,a.createElement)(a.Fragment,null,(0,a.createElement)("div",{className:"container"},(0,a.createElement)("div",{className:"header"},(0,a.createElement)("div",{className:"header-content flex"},(0,a.createElement)("div",{className:"brand-area flex"},(0,a.createElement)("div",{className:"brand-logo"},(0,a.createElement)("svg",{width:108,height:108,viewBox:"0 0 108 108",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,a.createElement)("circle",{cx:54,cy:54,r:54,fill:"#7456F2"}),(0,a.createElement)("rect",{x:24,y:38,width:15,height:31,rx:2,fill:"#BFAFFF"}),(0,a.createElement)("rect",{x:61,y:38,width:25,height:31,rx:2,fill:"#BFAFFF"}),(0,a.createElement)("g",{filter:"url(#filter0_d_8_4)"},(0,a.createElement)("rect",{x:34,y:28,width:40,height:52,rx:2,fill:"#E6E0FF"})),(0,a.createElement)("path",{d:"M57.6821 47.9232C57.6821 47.9232 58.7979 49.259 60.4639 48.5987C62.1299 47.9387 62.0669 45.7699 60.9827 44.8507C59.8981 43.9312 57.9413 41.7623 52.7554 41.4086C47.5691 41.0553 44.0564 44.8453 43.8443 45.0954C43.6321 45.3456 42.4534 45.8879 41.3927 44.8507C40.9213 44.3555 40.7092 43.1532 41.7228 42.2811C42.7365 41.4086 46.8853 37.2834 54.3581 38.1085C61.8313 38.9335 66.7345 44.7327 67.7246 50.4848C68.7147 56.2366 66.9705 62.8844 60.2282 67.0335C53.486 71.1826 44.4807 68.3067 41.3221 64.2047C40.4891 63.199 41.6519 60.15 44.1039 62.1303C46.5555 64.1105 51.6158 67.6308 58.5307 64.0161C65.446 60.4013 66.2631 51.1448 62.3026 51.1448H52.5429C51.3062 51.1448 50.3034 52.1476 50.3034 53.3843C50.3034 54.6213 51.3062 55.6237 52.5429 55.6237H59.5266C59.7131 55.6237 59.8434 55.8094 59.779 55.9843C59.3025 57.2749 57.2687 61.5601 51.4116 60.9986C44.5281 60.3387 41.8376 50.3335 49.62 46.3828C53.2032 44.7367 57.0222 46.8701 57.6821 47.9232Z",fill:"#7456F2"}),(0,a.createElement)("defs",null,(0,a.createElement)("filter",{id:"filter0_d_8_4",x:30,y:28,width:48,height:60,filterUnits:"userSpaceOnUse",colorInterpolationFilters:"sRGB"},(0,a.createElement)("feFlood",{floodOpacity:0,result:"BackgroundImageFix"}),(0,a.createElement)("feColorMatrix",{in:"SourceAlpha",type:"matrix",values:"0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0",result:"hardAlpha"}),(0,a.createElement)("feOffset",{dy:4}),(0,a.createElement)("feGaussianBlur",{stdDeviation:2}),(0,a.createElement)("feComposite",{in2:"hardAlpha",operator:"out"}),(0,a.createElement)("feColorMatrix",{type:"matrix",values:"0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"}),(0,a.createElement)("feBlend",{mode:"normal",in2:"BackgroundImageFix",result:"effect1_dropShadow_8_4"}),(0,a.createElement)("feBlend",{mode:"normal",in:"SourceGraphic",in2:"effect1_dropShadow_8_4",result:"shape"})))),(0,a.createElement)("h3",{className:"brand-title"},(0,s.__)("GutSlider Blocks","slider-blocks"))),(0,a.createElement)("div",{className:"header-tabs"},(0,a.createElement)(r.ButtonGroup,null,(0,a.createElement)(r.Button,{className:"welcome-tab header-tab "+("welcome"===e?"active":""),onClick:()=>t("welcome")},(0,s.__)("Welcome","slider-blocks")),(0,a.createElement)(r.Button,{className:"blocks-tab header-tab "+("blocks"===e?"active":""),onClick:()=>t("blocks")},(0,s.__)("Blocks","slider-blocks")),(0,a.createElement)(r.Button,{className:"settings-tab header-tab "+("settings"===e?"active":""),onClick:()=>t("settings")},(0,s.__)("Settings","slider-blocks"))))),(0,a.createElement)("div",{className:"changes-log flex"},(0,a.createElement)("a",{href:"https://gutslider.com",target:"_blank",rel:"nofollow noreferrer",className:"gutslider-prop"},(0,s.__)("GutSlider Pro","slider-blocks")),(0,a.createElement)(C,null),(0,a.createElement)(r.Button,{className:"changes-log-btn",onClick:()=>n(!0)},(0,a.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"16",height:"16",fill:"currentColor",viewBox:"0 0 16 16"},(0,a.createElement)("path",{d:"M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"})))))),(0,a.createElement)("div",{className:"tabs-body"},"welcome"===e&&(0,a.createElement)(c,null),"blocks"===e&&(0,a.createElement)(v,null),"settings"===e&&(0,a.createElement)(b,null))),l&&(0,a.createElement)("div",{className:"logs-panel"},(0,a.createElement)(N,{setLogPanel:n}),(0,a.createElement)(f,null)))},x=()=>(0,a.createElement)(y,null);window.addEventListener("DOMContentLoaded",(()=>{const e=document.getElementById("gutslider");e&&(0,a.render)((0,a.createElement)(x,null),e)}))}},l={};function a(e){var s=l[e];if(void 0!==s)return s.exports;var r=l[e]={exports:{}};return t[e](r,r.exports,a),r.exports}a.m=t,e=[],a.O=(t,l,s,r)=>{if(!l){var n=1/0;for(m=0;m<e.length;m++){for(var[l,s,r]=e[m],o=!0,i=0;i<l.length;i++)(!1&r||n>=r)&&Object.keys(a.O).every((e=>a.O[e](l[i])))?l.splice(i--,1):(o=!1,r<n&&(n=r));if(o){e.splice(m--,1);var c=s();void 0!==c&&(t=c)}}return t}r=r||0;for(var m=e.length;m>0&&e[m-1][2]>r;m--)e[m]=e[m-1];e[m]=[l,s,r]},a.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return a.d(t,{a:t}),t},a.d=(e,t)=>{for(var l in t)a.o(t,l)&&!a.o(e,l)&&Object.defineProperty(e,l,{enumerable:!0,get:t[l]})},a.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={955:0,584:0};a.O.j=t=>0===e[t];var t=(t,l)=>{var s,r,[n,o,i]=l,c=0;if(n.some((t=>0!==e[t]))){for(s in o)a.o(o,s)&&(a.m[s]=o[s]);if(i)var m=i(a)}for(t&&t(l);c<n.length;c++)r=n[c],a.o(e,r)&&e[r]&&e[r][0](),e[r]=0;return a.O(m)},l=globalThis.webpackChunkgutenberg_boilerplate=globalThis.webpackChunkgutenberg_boilerplate||[];l.forEach(t.bind(null,0)),l.push=t.bind(null,l.push.bind(l))})();var s=a.O(void 0,[584],(()=>a(170)));s=a.O(s)})();