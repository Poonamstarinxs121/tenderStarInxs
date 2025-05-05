import React, { useState } from 'react';
import { Head, useForm } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import Modal from '@/Components/Modal';

export default function Index({ auth, oems }) {
    const [showModal, setShowModal] = useState(false);
    const [editingOEM, setEditingOEM] = useState(null);
    const [searchQuery, setSearchQuery] = useState('');

    const { data, setData, post, put, processing, reset } = useForm({
        company_name: '',
        contact_person: '',
        phone_number: '',
        email: '',
        status: 'active'
    });

    const filteredOEMs = oems.filter(oem => 
        oem.company_name.toLowerCase().includes(searchQuery.toLowerCase()) ||
        oem.contact_person.toLowerCase().includes(searchQuery.toLowerCase()) ||
        oem.email.toLowerCase().includes(searchQuery.toLowerCase())
    );

    const handleSubmit = (e) => {
        e.preventDefault();
        if (editingOEM) {
            put(route('oems.update', editingOEM.id), {
                onSuccess: () => {
                    setShowModal(false);
                    reset();
                    setEditingOEM(null);
                }
            });
        } else {
            post(route('oems.store'), {
                onSuccess: () => {
                    setShowModal(false);
                    reset();
                }
            });
        }
    };

    const handleEdit = (oem) => {
        setEditingOEM(oem);
        setData(oem);
        setShowModal(true);
    };

    const handleDelete = (oem) => {
        if (confirm('Are you sure you want to delete this OEM?')) {
            router.delete(route('oems.destroy', oem.id));
        }
    };

    return (
        <AuthenticatedLayout user={auth.user}>
            <Head title="OEMs" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <div className="flex justify-between items-center mb-6">
                            <div>
                                <h2 className="text-2xl font-semibold text-gray-800">OEMs</h2>
                                <p className="text-gray-600">Manage your OEM information</p>
                            </div>
                            <PrimaryButton onClick={() => {
                                setEditingOEM(null);
                                reset();
                                setShowModal(true);
                            }} className="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fillRule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clipRule="evenodd" />
                                </svg>
                                Add New OEM
                            </PrimaryButton>
                        </div>

                        <div className="mb-6">
                            <TextInput
                                type="text"
                                className="w-full"
                                placeholder="Search OEMs..."
                                value={searchQuery}
                                onChange={e => setSearchQuery(e.target.value)}
                            />
                        </div>

                        <div className="overflow-x-auto">
                            <table className="min-w-full divide-y divide-gray-200">
                                <thead className="bg-gray-50">
                                    <tr>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Company Name</th>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact Person</th>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone No.</th>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody className="bg-white divide-y divide-gray-200">
                                    {filteredOEMs.length === 0 ? (
                                        <tr>
                                            <td className="px-6 py-12 text-center text-gray-500" colSpan="6">
                                                No OEMs found. Add your first OEM to get started.
                                            </td>
                                        </tr>
                                    ) : (
                                        filteredOEMs.map((oem) => (
                                            <tr key={oem.id}>
                                                <td className="px-6 py-4 whitespace-nowrap">{oem.company_name}</td>
                                                <td className="px-6 py-4 whitespace-nowrap">{oem.contact_person}</td>
                                                <td className="px-6 py-4 whitespace-nowrap">{oem.phone_number}</td>
                                                <td className="px-6 py-4 whitespace-nowrap">{oem.email}</td>
                                                <td className="px-6 py-4 whitespace-nowrap">
                                                    <span className={`px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${
                                                        oem.status === 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'
                                                    }`}>
                                                        {oem.status}
                                                    </span>
                                                </td>
                                                <td className="px-6 py-4 whitespace-nowrap text-sm">
                                                    <button
                                                        onClick={() => handleEdit(oem)}
                                                        className="text-indigo-600 hover:text-indigo-900 mr-4"
                                                    >
                                                        Edit
                                                    </button>
                                                    <button
                                                        onClick={() => handleDelete(oem)}
                                                        className="text-red-600 hover:text-red-900"
                                                    >
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        ))
                                    )}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <Modal show={showModal} onClose={() => setShowModal(false)}>
                <form onSubmit={handleSubmit} className="p-6">
                    <h2 className="text-lg font-medium text-gray-900">
                        {editingOEM ? 'Edit OEM' : 'Add New OEM'}
                    </h2>

                    <div className="mt-6">
                        <div className="mb-4">
                            <label className="block text-sm font-medium text-gray-700">Company Name</label>
                            <TextInput
                                type="text"
                                className="mt-1 block w-full"
                                value={data.company_name}
                                onChange={e => setData('company_name', e.target.value)}
                                required
                            />
                        </div>

                        <div className="mb-4">
                            <label className="block text-sm font-medium text-gray-700">Contact Person</label>
                            <TextInput
                                type="text"
                                className="mt-1 block w-full"
                                value={data.contact_person}
                                onChange={e => setData('contact_person', e.target.value)}
                                required
                            />
                        </div>

                        <div className="mb-4">
                            <label className="block text-sm font-medium text-gray-700">Phone Number</label>
                            <TextInput
                                type="text"
                                className="mt-1 block w-full"
                                value={data.phone_number}
                                onChange={e => setData('phone_number', e.target.value)}
                                required
                            />
                        </div>

                        <div className="mb-4">
                            <label className="block text-sm font-medium text-gray-700">Email</label>
                            <TextInput
                                type="email"
                                className="mt-1 block w-full"
                                value={data.email}
                                onChange={e => setData('email', e.target.value)}
                                required
                            />
                        </div>

                        <div className="mb-4">
                            <label className="block text-sm font-medium text-gray-700">Status</label>
                            <select
                                className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                value={data.status}
                                onChange={e => setData('status', e.target.value)}
                            >
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>

                    <div className="mt-6 flex justify-end">
                        <button
                            type="button"
                            onClick={() => setShowModal(false)}
                            className="mr-3 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        >
                            Cancel
                        </button>
                        <PrimaryButton type="submit" disabled={processing}>
                            {editingOEM ? 'Update OEM' : 'Create OEM'}
                        </PrimaryButton>
                    </div>
                </form>
            </Modal>
        </AuthenticatedLayout>
    );
} 