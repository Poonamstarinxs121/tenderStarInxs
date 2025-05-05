import React from 'react';
import { Link } from '@inertiajs/react';

export default function AuthenticatedLayout({ user, children }) {
    return (
        <div className="min-h-screen bg-gray-100">
            {/* Sidebar */}
            <div className="fixed inset-y-0 left-0 w-64 bg-white shadow-lg">
                {/* Logo */}
                <div className="h-16 flex items-center px-6 bg-yellow-200">
                    <h1 className="text-xl font-bold">StarTenderManagement</h1>
                </div>

                {/* Navigation */}
                <nav className="mt-6">
                    <Link
                        href={route('dashboard')}
                        className="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100"
                    >
                        <svg className="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4z" />
                            <path d="M3 10a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1v-2z" />
                            <path d="M3 16a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1v-2z" />
                        </svg>
                        Dashboard
                    </Link>

                    <Link
                        href={route('companies')}
                        className="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100"
                    >
                        <svg className="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path fillRule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4zm3 1h6v4H7V5zm6 6H7v2h6v-2z" clipRule="evenodd" />
                        </svg>
                        Companies
                    </Link>

                    <Link
                        href={route('oems')}
                        className="flex items-center px-6 py-3 text-gray-700 bg-gray-100"
                    >
                        <svg className="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                        </svg>
                        OEMs
                    </Link>

                    <Link
                        href={route('customers')}
                        className="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100"
                    >
                        <svg className="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                        </svg>
                        Customers
                    </Link>

                    <Link
                        href={route('user-management')}
                        className="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100"
                    >
                        <svg className="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                        </svg>
                        User Management
                    </Link>

                    <Link
                        href={route('leads')}
                        className="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100"
                    >
                        <svg className="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                        </svg>
                        Leads
                    </Link>

                    <Link
                        href={route('document-management')}
                        className="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100"
                    >
                        <svg className="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path fillRule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clipRule="evenodd" />
                        </svg>
                        Document Management
                    </Link>

                    <Link
                        href={route('tender-management')}
                        className="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100"
                    >
                        <svg className="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path fillRule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clipRule="evenodd" />
                        </svg>
                        Tender Management
                    </Link>
                </nav>
            </div>

            {/* Main Content */}
            <div className="pl-64">
                <main>{children}</main>
            </div>
        </div>
    );
} 