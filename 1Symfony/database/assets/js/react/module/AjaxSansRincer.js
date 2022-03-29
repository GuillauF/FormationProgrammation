import React, {useEffect, useState} from "react";

export default function AjaxSansRincer()
{
    let [image, setImage] = useState('');
    let [title, setTitle] = useState('');
    let [first, setFirst] = useState('');
    let [last, setLast] = useState('');

    async function ajax()
    {
        let response = await fetch("/react/ajaxSansRincerBis");

        if (response.ok) {
            setImage(await response.json());
            setTitle(response);
            setFirst(response);
            setLast(response);

        } else {
            setImage(response.status);
        }
    }

    useEffect(ajax);

    return <>
        <h1>AjaxSansRinceRoot</h1>
        {title.name}
        {first.name}
        {last.name}
        {image}
    </>
}