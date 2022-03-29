import React from "react";
import Calculatrice from "./Calculatrice";
import AjaxSansRincer from "./AjaxSansRincer";

export default function App()
{
    return <>
        <div>
            <AjaxSansRincer/>
        </div>

        <div>
            <Calculatrice/>
        </div>
    </>;
}