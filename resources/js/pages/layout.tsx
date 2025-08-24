import AppLayout from '@/layouts/app-layout';
import { BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/react';
import React from 'react';

export default function LayoutApp({ breadcrumbs, children }: { breadcrumbs: BreadcrumbItem[]; children: React.ReactNode }) {
    return (
        <>
            <AppLayout breadcrumbs={breadcrumbs}>
                <Head title="Dashboard" />
                <div className="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">{children}</div>
            </AppLayout>
        </>
    );
}
