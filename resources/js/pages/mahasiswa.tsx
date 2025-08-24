import { BreadcrumbItem } from "@/types";
import LayoutApp from "./layout";

export default function Mahasiswa({breadcrumb, user}:{breadcrumb: string; user: any}) {
    console.log(breadcrumb)
    console.log(user)
    const breadcrumbs: BreadcrumbItem[] = JSON.parse(breadcrumb)
    return (
        <>
            <LayoutApp breadcrumbs={breadcrumbs}>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam sint velit placeat iure autem maxime saepe. Dolorum iusto error, laborum
                omnis repellat adipisci possimus repellendus est illum itaque ex provident.
            </LayoutApp>
        </>
    );
}
