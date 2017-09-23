<style>
    .pieContainer {
          height: 100px;
     }
     .pieBackground {
          background-color: grey;
          position: absolute;
          width: 100px;
          height: 100px;
          -moz-border-radius: 50px;
          -webkit-border-radius: 50px;
          -o-border-radius: 50px;
          border-radius: 50px;
          -moz-box-shadow: -1px 1px 3px #000;
          -webkit-box-shadow: -1px 1px 3px #000;
          -o-box-shadow: -1px 1px 3px #000;
          box-shadow: -1px 1px 3px #000;
     }
     .pie {
          position: absolute;
          width: 100px;
          height: 100px;
          -moz-border-radius: 50px;
          -webkit-border-radius: 50px;
          -o-border-radius: 50px;
          border-radius: 50px;
          clip: rect(0px, 50px, 100px, 0px);
     }
     .hold {
          position: absolute;
          width: 100px;
          height: 100px;
          -moz-border-radius: 50px;
          -webkit-border-radius: 50px;
          -o-border-radius: 50px;
          border-radius: 50px;
          clip: rect(0px, 100px, 100px, 50px);
     }
      
     #pieSlice1 .pie {
          background-color: #1b458b;
          -webkit-transform:rotate(150deg);
          -moz-transform:rotate(150deg);
          -o-transform:rotate(150deg);
          transform:rotate(150deg);
     }
     #pieSlice2 {
          -webkit-transform:rotate(150deg);
          -moz-transform:rotate(150deg);
          -o-transform:rotate(150deg);
          transform:rotate(150deg);
     }
     #pieSlice2 .pie {
          background-color: #ccbb87;
          -webkit-transform:rotate(40deg);
          -moz-transform:rotate(40deg);
          -o-transform:rotate(40deg);
          transform:rotate(40deg);
     }
     #pieSlice3 {
          -webkit-transform:rotate(190deg);
          -moz-transform:rotate(190deg);
          -o-transform:rotate(190deg);
          transform:rotate(190deg);
     }
     #pieSlice3 .pie {
          background-color: #cc0000;
          -webkit-transform:rotate(70deg);
          -moz-transform:rotate(70deg);
          -o-transform:rotate(70deg);
          transform:rotate(70deg);
     }
     #pieSlice4 {
          -webkit-transform:rotate(260deg);
          -moz-transform:rotate(260deg);
          -o-transform:rotate(260deg);
          transform:rotate(260deg);
     }
     #pieSlice4 .pie {
          background-color: #cc00ff;
          -webkit-transform:rotate(100deg);
          -moz-transform:rotate(100deg);
          -o-transform:rotate(100deg);
          transform:rotate(100deg);
     }
</style>
 